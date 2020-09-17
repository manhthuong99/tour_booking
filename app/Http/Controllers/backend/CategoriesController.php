<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category_detail;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data['listCategories'] = Category_detail::orderBy('category_detail_id', 'DESC')->paginate(10);
        return view('backend.category.listing-create', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $data = new Category_detail();
        $data->category_detail_name = $request->name;
        $data->position = $request->position;
        $check = Category_detail::where('category_detail_name', $request->name)
            ->get();
        if ($check->count()) {
            return redirect()->back()->with('failed', 'Tên này đã tồn tại');
        } else {
            $data->save();
            return redirect('/admin/category')->with('success', 'Tạo thành công');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
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
        $data['listCategories'] = Category_detail::orderBy('category_detail_id', 'DESC')->paginate(10);
        $data['editCategories'] = Category_detail::where('category_detail_id', $id)->get();
        return view('backend.category.listing-edit', $data);
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
        $data = Category_detail::find($id);
        $data->category_detail_name = $request->name;
        $data->position = $request->position;
        if ($this->checkDuplicateName($request->id,$request->category_detail_name)){
           return redirect()->back()->with('failed', 'Tên này đã tồn tại');
        }
        else{
            $data->save();
            return redirect('/admin/category')->with('success', 'Sửa thành công');
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
        $result = Category_detail::find($id);
        $result->delete();
        return redirect('/admin/category')->with('success', 'Xóa thành công!');
    }

    public function checkDuplicateName($id, $name)
    {
        $check = false;
        $result1 = Category_detail::where([
            'category_detail_name' => $name
        ])->get();
        if ($result1->count()) {
            $result2 = Category_detail::where([
                'category_detail_name' => $name,
                'category_detail_id'=>$id
            ])->get();
            if ($result2->count()){
                $check = false;
            }
            else $check = true;
        } else
             $check = false;
        return $check;
    }
}
