<?php

namespace App\Http\Controllers\frontend;

use App\Models\Booking;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Category_detail;

class Home extends Controller
{
    public function index(){
        $data['listTours']=Category::with('tours','category_detail')
            ->join('tours','tours.tours_id','=','category.id_tours')
            ->join('category_detail','category.id_category_detail','=','category_detail.category_detail_id')
            ->where('status',1)
            ->orderBy('tours_id', 'DESC')
            ->paginate(12);
        $data['topBooking'] = Booking::with('tours')
            ->join('tours', 'booking.id_tours', '=', 'tours.tours_id')
            ->selectRaw('count(id_tours) as total,tours_name,image,tours_id')
            ->where('status',1)
            ->groupBy('tours_name','image','tours_id')
            ->orderBy('total', 'desc')
            ->paginate(10);
        $data['categories']=Category_detail::get();
//        dd($data);
        return view('frontend.pages.home2',$data);
    }


}
