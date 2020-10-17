<?php

namespace App\Http\Controllers\frontend;

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

}
