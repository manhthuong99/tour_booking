<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class About extends Controller
{
    public function index(){
        return view('frontend.pages.about');
    }

}
