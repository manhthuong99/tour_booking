<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Destination;
use App\Model\District;
use App\Model\Province;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {

        $data['listDestination'] = Destination::orderBy('destination_id', 'DESC')->paginate(10);
        return view('backend/destination/listing', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $data['listProvince'] = Province::orderBy('_name')->get()->toArray();
        return view("backend/destination/create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $address = "";
        $data = new Destination();
        $data->name = $request->name;
        $data->description = $request->description;
        if ($request->id_district != null) {
            $arrDistrict = District::where('id', $request->id_district)->get()->toArray();
            $address .= $arrDistrict[0]['_prefix'] . ' ' . $arrDistrict[0]['_name'] . ', ';
            $arrProvince = Province::where('id', $request->id_province)->get()->toArray();
            $address .= $arrProvince[0]['_name'];
            $data->address = $address;
        }
        $data->id_province = $request->id_province;
        $data->id_district = $request->id_district;
        if ($request->hasFile('image')) {
            $data->image = rand() . '-' . $request->image->getClientOriginalName();
            $request->image->storeAs('images', $data->image, 'public');
        }
        if ($data->save()) {
            return redirect('/admin/destination')->with('success', 'Tạo mới thành công!');
        } else {
            return redirect()->back();
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $data['listProvince'] = Province::orderBy('_name')->get()->toArray();
        $data['destinations'] = Destination::where('destination_id', $id)->get();
        return view("backend/destination/edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request, $id)
    {
        $address = "";
        $data = Destination::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        if ($request->id_district != null) {
            $arrDistrict = District::where('id', $request->id_district)->get()->toArray();
            $address .= $arrDistrict[0]['_prefix'] . ' ' . $arrDistrict[0]['_name'] . ', ';
            $arrProvince = Province::where('id', $request->id_province)->get()->toArray();
            $address .= $arrProvince[0]['_name'];
            $data->address = $address;
        }
        $data->id_province = $request->id_province;
        $data->id_district = $request->id_district;
        if ($request->hasFile('image')) {
            $data->image = rand() . '-' . $request->image->getClientOriginalName();
            $request->image->storeAs('images', $data->image, 'public');
        }
        if ($data->save()) {
            return redirect('/admin/destination')->with('success', 'Thay đổi thành công!');
        } else {
            return redirect()->back()->with('success', 'thêm thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy($id)
    {
        $result = Destination::find($id);
        $result->delete();
        return redirect('/admin/destination')->with('success', 'Xóa thành công!');
    }

    public function filter(Request $request)
    {
        if ($request->ajax()) {
            $i = 1;
            $search = $request->get('search');
            $listDestination = Destination::orderBy('destination_id', 'DESC')
                ->where('name', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%')
                ->paginate(1);
            foreach ($listDestination as $value) {
                echo '<tr>';
                echo '<td align="center">' . $i++ . '</td>';
                echo '<td>' . $value->name . '</td>';
                echo ' <td>' . $value->address . '</td>';
                echo '<td align="center">
                            <button><a style="margin-left: 20%" href="' . route('destination.edit', $value->destination_id) . '"><span
                                        class="glyphicon glyphicon-edit"></span></a></button>
                        </td>';
                echo '<td align="center">';
                echo '<form method="POST" action="' . route('destination.destroy', $value->destination_id) . '">';
                echo '<button type="submit"><span  class="glyphicon glyphicon-floppy-remove"></span></button>';
                echo ' </form>';
                echo '</td>';
                echo '</tr>';
            }
        }
    }
}
