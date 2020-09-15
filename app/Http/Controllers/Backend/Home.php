<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    public function index(Request $request)
    {
        $arr = [
            'username' => $request->username,
            'password' => $request->password,
            'permission' => 1
        ];
        if (Auth::attempt($arr)) {
            return  redirect('/admin/dashboard');
        } else {
            return
                redirect()->back()->with('message', 'Sai tên tài khoảng hoặc mật khẩu!');
        }
    }

    public function login()
    {
        return view('backend.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
    public function dashboard(){
        $current_time = Carbon::now();
        $count = Users::where('status', 1)
            ->whereYear('created_at', '<=', $current_time->year)
            ->whereMonth('created_at', $current_time->month)
            ->count();
        $data['member'] = $count;
        return view('backend.home.dashboard',$data);
    }

}
