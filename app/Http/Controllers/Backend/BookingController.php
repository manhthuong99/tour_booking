<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Booking;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data['listBooking']=Booking::with('tours')->join('tours','booking.id_tours','=','tours.tours_id')
            ->orderBy('booking_id', 'DESC')
            ->paginate(15);
        return view('backend.booking.listing', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
//        $data['listProvince'] = Province::orderBy('_name')->get()->toArray();
//        return view("backend/destination/create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $data['Booking'] = Booking::with('tours')->join('tours','booking.id_tours','=','tours.tours_id')
        ->where('booking_id', $id)->get();
        return view('backend.booking.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
//        $data['userEdit'] = User::where('id', $id)->get();
//        return view("backend/user/edit", $data);
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
        echo 'Id: '.$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy($id)
    {
        $result = Booking::find($id);
        $result->delete();
        return redirect()->back()->with('success', 'Xóa thành công!');
    }
    public function apply(Request $request){
        $data = Booking::find($request->booking_id);
        $data->booking_status = $request->booking_status;
        $data->save();
        return redirect('/admin/booking')->with('success', 'Xác nhận thành công!');
    }
    public function success(){
        $data['listBooking'] = Booking::where('status',1)
            ->orderBy('id', 'DESC')
            ->paginate(15);
        return view('backend/booking/listing', $data);
    }
}
