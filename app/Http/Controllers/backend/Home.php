<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Search;
use App\Models\Users;
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
            'permission' => 1,
            'status' => 1
        ];
        if (Auth::attempt($arr)) {
            return redirect('/admin/dashboard');
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

    public function dashboard()
    {
        $data = array();
        $current_time = Carbon::now();
        $countUser = Users::where('status', 1)
            ->whereYear('created_at', '<=', $current_time->year)
            ->whereMonth('created_at', $current_time->month)
            ->count();
        $data['member'] = $countUser;
        $countBooking = Booking::where('booking_status', 1)
            ->whereYear('created_at', '<=', $current_time->year)
            ->whereMonth('created_at', $current_time->month)
            ->count();
        $data['booking'] = $countBooking;
        $data['totalMonth'] = Booking::where('booking_status', 2)
            ->whereYear('confirm_at', '<=', $current_time->year)
            ->whereMonth('confirm_at', $current_time->month)
            ->sum('total');;
        $data['total'] = Booking::where('booking_status', 2)
            ->sum('total');;
        $data['newCustomer'] = $countUser = Users::where(['status' => 1, 'permission' => 0])
            ->whereYear('created_at', '<=', $current_time->year)
            ->whereMonth('created_at', $current_time->month)
            ->orderBy('users_id', 'DESC')
            ->paginate(10);
        $data['listBooking'] = Booking::with('tours', 'users')
            ->join('tours', 'booking.id_tours', '=', 'tours.tours_id')
            ->join('users', 'booking.id_users', '=', 'users.users_id')
            ->orderBy('booking_id', 'DESC')->where('booking_status', 1)
            ->paginate(10);
        $data['topSearch'] = Search::selectRaw('count(searchs) as total, searchs')
            ->groupBy('searchs')
            ->orderBy('total', 'desc')
            ->paginate(10);
        $data['topBooking'] = Booking::with('tours')
            ->join('tours', 'booking.id_tours', '=', 'tours.tours_id')
            ->selectRaw('count(id_tours) as total,tours_name,price')
            ->groupBy('tours_name','price')
            ->orderBy('total', 'desc')
            ->paginate(10);
        return view('backend.home.dashboard', $data);
    }

}
