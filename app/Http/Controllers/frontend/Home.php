<?php

namespace App\Http\Controllers\frontend;

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
        return view('frontend.pages.home2',$data);
    }


}
