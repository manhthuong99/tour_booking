<?php

namespace App\Http\Controllers\frontend;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UpdateInfoClient extends Controller
{
    public function index($id){
        $data['users'] = Users::where('permission', 0)
            ->where('users_id', $id)
            ->get();
        return view('frontend.pages.updateInfoClient',$data);
    }
    public function saveProfile(Request $request){
        $data = Users::find($request->id);
        $data->fullname = $request->fullname;
        $data->phone_number = $request->phone_number;
        $data->address = $request->address;
        $data->birthday = $request->birthday;

        if ($request->hasFile('avatar')) {
            $data->avatar = rand() . '-' . $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('avatars', $data->avatar, 'public');
        }
        if ($data->save()){
           return redirect(route('frontend.profile',$request->id))->with('success', 'Thay đổi thành công');
        }
    }


}
