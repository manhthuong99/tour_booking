<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Category_detail;
use App\Models\Tours;

class Home extends Controller
{
    public function index()
    {
        $data['listTours'] = Tours::
        where('status', 1)
            ->orderBy('tours_id', 'DESC')
            ->distinct('tours_name')
            ->paginate(12);
        $data['toursDiscount'] = Tours::
        where('discount','>', 0)
            ->orderBy('tours_id', 'DESC')
            ->distinct('tours_name')
            ->paginate(6);
        $data['toursHighlights'] = Category::with('tours', 'category_detail')
            ->join('tours', 'tours.tours_id', '=', 'category.id_tours')
            ->join('category_detail', 'category.id_category_detail', '=', 'category_detail.category_detail_id')
            ->where('status', 1)
            ->where('category_detail_id', 4)
            ->orderBy('tours_id', 'DESC')
            ->paginate(4);
        $data['topBooking'] = Booking::with('tours')
            ->join('tours', 'booking.id_tours', '=', 'tours.tours_id')
            ->selectRaw('count(id_tours) as total,tours_name,image,tours_id')
            ->where('status', 1)
            ->groupBy('tours_name', 'image', 'tours_id')
            ->orderBy('total', 'desc')
            ->paginate(10);
        $data['categories'] = Category_detail::get();

//        dd($data);
        return view('frontend.pages.home2', $data);
    }


}
