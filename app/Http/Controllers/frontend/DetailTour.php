<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DetailTour extends Controller
{
    public function index($id){
        dd($id);
        return view('frontend.pages.detailTour');
    }

}
