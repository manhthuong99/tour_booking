<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Home extends Controller
{
    public function index(){
        return view('frontend.pages.home');
    }

}
