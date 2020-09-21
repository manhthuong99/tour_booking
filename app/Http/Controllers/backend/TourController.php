<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Category_detail;
use App\Models\Destination;
use App\Models\District;
use App\Models\Province;
use App\Models\Tours;
use App\Models\Transport;
use App\Models\Transport_detail;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data['listTours'] = Tours::orderBy('tours_id', 'DESC')->get();
        return view('backend.tours.listing', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $data['listProvince'] = Province::orderBy('_name')->get()->toArray();
        $data['listTranSport'] = Transport_detail::orderBy('transport_detail_id', 'DESC')->get();
        $data['listCategories'] = Category_detail::orderBy('category_detail_id', 'DESC')->get();
        return view('backend.tours.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $data = new Tours();
        $data->tours_name = $request->name;
        $data->destination = $request->destination;
        $data->price = $request->price;
        $data->day_number = $request->day_number;
        $data->discount = $request->discount;
        $data->calendar = $request->calendar;
        $data->description = $request->description;
        $data->id_province = $request->id_province;
        $data->id_district = $request->id_district;
        if ($request->hasFile('images')) {
            $data->image = rand() . '-' . $request->images->getClientOriginalName();
            $request->images->storeAs('tours', $data->image, 'public');
        }
        if ($this->checkDuplicateName('', $request->tours_name)) {
            return redirect()->back()->with('failed', 'Tên này đã tồn tại');
        } else {
            $data->save();
            if ($request->id_category) {
                foreach ($request->id_category as $value) {
                    $category = new Category();
                    $category->id_category_detail = $value;
                    $category->id_tours = $data->tours_id;
                    $category->save();
                }
            }
            if ($request->id_transport) {
                foreach ($request->id_transport as $value) {
                    $transport = new Transport();
                    $transport->id_transport_detail = $value;
                    $transport->id_tours = $data->tours_id;;
                    $transport->save();
                }
            }
            return redirect('/admin/tour')->with('success', 'Tạo thành công');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $data['listTranSport'] = Transport_detail::orderBy('transport_detail_id', 'DESC')->get();
        $data['listCategories'] = Category_detail::orderBy('category_detail_id', 'DESC')->get();
        $data['toursSelected'] = Tours::where('tours_id',$id)->get();
        return view('backend.tours.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = Tours::find($id);
        $data->tours_name = $request->name;
        $data->destination = $request->destination;
        $data->price = $request->price;
        $data->day_number = $request->day_number;
        $data->discount = $request->discount;
        $data->calendar = $request->calendar;
        $data->description = $request->description;
        if ($request->id_district != null) {
            $address ="";
            $arrDistrict = District::where('id', $request->id_district)->get()->toArray();
            $address .= $arrDistrict[0]['_prefix'] . ' ' . $arrDistrict[0]['_name'] . ', ';
            $arrProvince = Province::where('id', $request->id_province)->get()->toArray();
            $address .= $arrProvince[0]['_name'];
            $data->address = $address;
        }
        $data->id_province = $request->id_province;
        $data->id_district = $request->id_district;
        if ($request->hasFile('images')) {
            $data->image = rand() . '-' . $request->images->getClientOriginalName();
            $request->images->storeAs('tours', $data->image, 'public');
        }
        if ($this->checkDuplicateName($id, $request->tours_name)) {
            return redirect()->back()->with('failed', 'Tên này đã tồn tại');
        } else {
            $data->save();
            if ($request->id_category) {
                foreach ($request->id_category as $value) {
                    $category = new Category();
                    $category->id_category_detail = $value;
                    $category->id_tours = $data->tours_id;
                    $category->save();
                }
            }
            if ($request->id_transport) {
                foreach ($request->id_transport as $value) {
                    $transport = new Transport();
                    $transport->id_transport_detail = $value;
                    $transport->id_tours = $data->tours_id;
                    $transport->save();
                }
            }
            return redirect('/admin/tour')->with('success', 'Chỉnh sửa thành công');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $result = Tours::find($id);
        $result->delete();
        return redirect('/admin/tour')->with('success', 'Xóa thành công!');
    }

    public function checkDuplicateName($id, $name)
    {
        $check = false;
        $result1 = Tours::where([
            'tours_name' => $name
        ])->get();
        if ($result1->count()) {
            $result2 = Tours::where([
                'tours_name' => $name,
                'tours_id' => $id
            ])->get();
            if ($result2->count()) {
                $check = false;
            } else $check = true;
        } else
            $check = false;
        return $check;
    }
}
