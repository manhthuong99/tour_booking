<?php

namespace App\Http\Controllers\frontend;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
        return view('frontend.pages.login');
    }

    public function checklogin(Request $request)
    {
        $arr = [
            'username' => $request->username,
            'password' => $request->password,
            'permission' => 0,
            'status' => 1
        ];
        if (Auth::attempt($arr)) {
            return redirect('/home');
        } else {
            return
                redirect()->back()->with('message', 'Sai tên tài khoảng hoặc mật khẩu!');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function register(Request $request){
        $data = new Users();
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        if ($data->save()){
            return "Tạo thành công";
        }
        else return "Tạo thất bại";

    }
}
