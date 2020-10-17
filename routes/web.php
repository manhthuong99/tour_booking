<?php

use App\Models\District;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'frontend\Home@index')->name('frontend.home');
// Route backend
Route::get('admin/login', 'backend\Home@login')->name('admin.login');
Route::get('admin', function () {
    if (\Illuminate\Support\Facades\Auth::check()) {
        return redirect('admin/dashboard');
    } else return redirect('admin/login');
})->name('admin.home');
Route::post('admin/login', 'backend\Home@login')->name('admin.login');
Route::get('admin/home', 'backend\Home@index')->name('admin.home');
Route::post('admin/home', 'backend\Home@index')->name('admin.home');
Route::get('admin/logout', 'backend\Home@logout')->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['admin.login']], function () {
    Route::post('loadDistrict', function (\Illuminate\Http\Request $request) {
        $data['listDistrict'] = District::where('_province_id', $request->id)->orderBy('_name')->get()->toArray();
        return view("backend.tours.district", $data);
    })->name('listDistrict');
    Route::get('dashboard', 'backend\Home@dashboard')->name('admin.dashboard');
    Route::resource('destination', 'backend\DestinationController')->except('show');
    Route::get('destination/filter', 'backend\DestinationController@filter')->name('destination.filter');
    Route::resource('user', 'backend\UserController');
    Route::resource('tour', 'backend\TourController');
    Route::resource('category', 'backend\CategoriesController');
    Route::resource('booking', 'backend\BookingController')->except('create');
    Route::post('apply', 'backend\BookingController@apply')->name('booking.apply');
    Route::post('cancel', 'backend\BookingController@cancel')->name('booking.cancel');
    Route::get('booking-success', 'backend\BookingController@success')->name('booking.success');
});


//Route frontend

//Route::get('login', 'frontend\UserController@login')->name('frontend.user.login');
//Route::post('index', 'frontend\UserController@index')->name('frontend.user.index');
//Route::get('register', 'frontend\UserController@register')->name('frontend.user.register');
//Route::get('repassword', 'frontend\UserController@repassword')->name('frontend.user.repassword');

Route::get('home', 'frontend\Home@index')->name('frontend.home');
Route::get('hotel', 'frontend\Hotel@index')->name('frontend.hotel');
Route::get('travel', 'frontend\Travel@index')->name('frontend.travel');
Route::get('transport', 'frontend\Transport@index')->name('frontend.transport');
Route::get('contact', 'frontend\Contact@index')->name('frontend.contact');
Route::get('about', 'frontend\About@index')->name('frontend.about');
Route::get('detailTour/{id?}', 'frontend\DetailTour@index')->name('frontend.detailTour');
Route::get('profile/{id}', 'frontend\InfoClient@index')->name('frontend.profile');
Route::get('updateProfile', 'frontend\UpdateInfoClient@index')->name('frontend.updateProfile');
Route::get('login', 'frontend\Login@index')->name('frontend.login');
Route::get('register', 'frontend\Register@index')->name('frontend.register');
Route::post('register', 'frontend\Login@register')->name('frontend.registerUser');
Route::post('booking', 'frontend\DetailTour@booking')->name('frontend.booking');
Route::post('checklogin', 'frontend\Login@checklogin')->name('frontend.checklogin');
Route::get('logout', 'frontend\Login@logout')->name('frontend.logout');
Route::post('checkUsername', function (\Illuminate\Http\Request $request) {
    $data = \App\Models\Users::where('username', $request->username)->get();
    if ($data->count()){
        return true;
    }
    else return false;
})->name('frontend.checkUsername');
Route::post('checkEmail', function (\Illuminate\Http\Request $request) {
    $data = \App\Models\Users::where('email', $request->email)->get();
    if ($data->count()){
        return true;
    }
    else return false;
})->name('frontend.checkEmail');


