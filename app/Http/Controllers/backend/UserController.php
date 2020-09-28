<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Users;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data['listUser'] = Users::where('permission', 0)
            ->where('status', 1)
            ->orderBy('users_id', 'DESC')
            ->get();
        return view('backend/user/listing', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|void
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector|void
     */
    public function store(Request $request)
    {
        $data = new Users();
        $data->email = $request->email;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->fullname = $request->fullname;
        $data->birthday = $request->birthday;
        $data->permission = $request->permission;
        $data->avatar = 'avatar-clone.jpg';
        if ($this->checkDuplicateName($request->users_id,$request->username)){
            return redirect()->back()->with('failed', 'Username này đã tồn tại');
        }
        else{
            $data->save();
            return redirect('/admin/user')->with('success', 'Tạo thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $data['userProfile'] = Users::where('users_id', $id)->get();
        $data['userBooking'] = Booking::with('tours','users')
            ->join('tours','booking.id_tours','=','tours.tours_id')
            ->join('users','booking.id_users','=','users.users_id')
            ->where('id_users',$id)
            ->orderBy('confirm_at', 'DESC')
            ->get();;
        return view('backend.user.profile', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $data['userEdit'] = Users::where('users_id', $id)->get();
        return view("backend/user/edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, $id)
    {
        $current_time = Carbon::now();
        $data = Users::find($id);
        $data->username = $request->username;
        $data->email = $request->email;
        $data->fullname = $request->fullname;
        $data->address = $request->address;
        $data->birthday = $request->birthday;
        $data->phone_number = $request->phone_number;
        $data->id_card = $request->id_card;
        $data->status = $request->status;
        $data->updated_at=$current_time;

        if ($request->hasFile('avatar')) {
            $data->avatar = rand() . '-' . $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('avatars', $data->avatar, 'public');
        }

        if ($this->checkDuplicateName($request->users_id,$request->username)){
            return redirect()->back()->with('failed', 'Username này đã tồn tại');
        }
        else{
            $data->save();
            return redirect('/admin/user')->with('success', 'Sửa thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy($id)
    {
        $result = Users::find($id);
        $result->delete();
        return redirect('/admin/user')->with('success', 'Xóa thành công!');
    }
    public function checkDuplicateName($id, $name)
    {
        $check = false;
        $result1 = Users::where([
            'username' => $name
        ])->get();
        if ($result1->count()) {
            $result2 = Users::where([
                'username' => $name,
                'users_id' => $id
            ])->get();
            if ($result2->count()) {
                $check = false;
            } else $check = true;
        } else
            $check = false;
        return $check;
    }
}
