<?php

namespace App\Http\Controllers\frontend;

use App\Models\Booking;
use App\Models\Category;
use App\Http\Controllers\Controller;
class Home extends Controller
{
    public function index(){
        $data['listTours']=Category::with('tours','category_detail')
            ->join('tours','tours.tours_id','=','category.id_tours')
            ->join('category_detail','category.id_category_detail','=','category_detail.category_detail_id')
            ->orderBy('tours_id', 'DESC')
            ->paginate(12);
        $data['topBooking'] = Booking::with('tours')
            ->join('tours', 'booking.id_tours', '=', 'tours.tours_id')
            ->selectRaw('count(id_tours) as total,tours_name,image,tours_id')
            ->groupBy('tours_name','image','tours_id')
            ->orderBy('total', 'desc')
            ->paginate(10);
        return view('frontend.pages.home2',$data);
    }
public function topBooking(){
    $data['topBooking'] = Booking::with('tours')
        ->join('tours', 'booking.id_tours', '=', 'tours.tours_id')
        ->selectRaw('count(id_tours) as total,tours_name,price')
        ->groupBy('tours_name','price')
        ->orderBy('total', 'desc')
        ->paginate(10);
}

}
