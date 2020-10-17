<?php

namespace App\Http\Controllers\frontend;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class InfoClient extends Controller
{
    public function index($id){
        $data['Users'] = Users::where('permission', 0)
            ->where('users_id', $id)
            ->get();
        return view('frontend.pages.infoClient',$data);
    }

}
