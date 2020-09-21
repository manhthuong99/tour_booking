<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $arr = array('username'=>$request->username,'password'=>md5($request->password),'status'=>1);
        $data = User::where($arr)
            ->get();
        if ($data->count()) {
            echo 1;
        }
        else {
            return redirect()->back()->with('false', 'Tài khoản hoặc mật khẩu không chính xác!');
        }
//        return view('backend.user.profile',$data);
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function register($username, $password)
    {

    }

    public function repassword($username, $password)
    {

    }

    public function checkLogin($username, $password)
    {

    }
}
