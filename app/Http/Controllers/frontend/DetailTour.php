<?php

namespace App\Http\Controllers\frontend;

use App\Models\Booking;
use App\Models\Tours;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DetailTour extends Controller
{
    public function index($id){
        $data['tourDetail']= Tours::where('tours_id',$id)->get();
        $data['transports']=\App\Models\Transport::with('tours','transport_detail')
            ->join('tours','tours.tours_id','=','transport.id_tours')
            ->join('transport_detail','transport.id_transport_detail','=','transport_detail.transport_detail_id')
            ->where('tours_id',$id)
            ->get();
        return view('frontend.pages.detailTour',$data);
    }
    public function booking(Request $request){
        $data = new Booking();

        $data->id_users =$request->id_users;
        $data->id_tours =$request->id_tours;
        $data->number_customer =$request->number_customer;
        $data->total =$request->total;
        if ($data->save()){
            return redirect()->back()->with('message', 'Đặt tour thành công!');
        }
        else return redirect()->back()->with('message', 'Đặt tour thất bại!');
    }

}
