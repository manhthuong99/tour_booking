<?php

namespace App\Http\Controllers\frontend;

use App\Models\Category;
use App\Models\Category_detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Travel extends Controller
{
    public function index($id){
        $data['listToursByCategory']=Category::with('tours','category_detail')
            ->join('tours','tours.tours_id','=','category.id_tours')
            ->join('category_detail','category.id_category_detail','=','category_detail.category_detail_id')
            ->where('status',1)
            ->where('category_detail_id',$id)
            ->orderBy('tours_id', 'DESC')
            ->paginate(12);
        $data['category_detail']=Category_detail::where('category_detail_id',$id)
        ->get();
        return view('frontend.pages.travel',$data);
    }

}
