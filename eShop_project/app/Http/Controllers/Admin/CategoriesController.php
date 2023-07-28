<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        // dd(request()->key);
        $data = category::orderBy('id', 'desc')->paginate(5);
        if ($key = request()->key) {
            $data = category::orderBy('id', 'desc')->where('cat_name', 'like', '%' . $key . '%')->paginate(5);
        }
        return view('admin.category.index')->with('data', $data);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = category::findOrFail($id);
        return view('admin.category.edit')->with('data', $data);
    }

    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data['_token']);
        $this->customValidate($request);

        //update hoặc create
        category::updateOrCreate(['id' => $id], $data);
        if ($id == null) {
            $msg = "Successfully created new category!";
        } else {
            $msg = "Catalog has been updated!";
        }
        return redirect()->route('admin.category.index')->with("_success", $msg);
        return redirect()->route('admin.category.index');
    }

    public function destroy($id)
    {
        $cat = category::findOrFail($id);
        $cat_name = $cat->cat_name;
        category::destroy($id);
        $msg = "Delete category '$cat_name' successfully!";
        return redirect()->route('admin.category.index')->with('_success', $msg);
    }
    private function customValidate(Request $request)
    {
        //Ràng buộc dữ liệu
        $rules = [
            "cat_name" => "required|min:3|max:50",
        ];
        $request->validate($rules);
    }
}
