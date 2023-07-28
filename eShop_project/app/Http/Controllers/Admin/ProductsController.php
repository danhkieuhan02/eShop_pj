<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $data = product::orderByDesc('id')->paginate(5);
        if ($key = request()->key) {
            $data = product::orderBy('id', 'desc')->where('prod_name', 'like', '%' . $key . '%')->paginate(5);
        }
        return view('admin.product.index')->with('data', $data);
    }

    public function create()
    {
        return view('admin.product.create');
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
        $data = product::findOrFail($id);
        return view('admin.product.edit')->with('data', $data);
    }

    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data['_token']);
        $file = $request->file("cover_img");
        if ($id == null) {
            $filename = "";
            if (!empty($file)) {
                $filename = $file->hashName();
                $file->storeAs("/file", $filename);
                $filename = "/file/" . $filename;
            }
            $data["cover_img"] = $filename;
        } else {
            if (empty($file)) {
                unset($data["cover_img"]);
            } else {
                $filename = $file->hashName();
                $file->storeAs("/file", $filename);
                $filename = "/file/" . $filename;
                $data["cover_img"] = $filename;
            }
        }
        product::updateOrCreate(["id" => $id], $data);
        if ($id == NULL) {
            $msg = "Successfully create a new product!";
        } else {
            $msg = "Product has been updated!";
        }
        return redirect()->route('admin.product.index')->with('_success', $msg);
    }


    public function destroy($id)
    {
        $prod = product::findOrFail($id);
        $prod_name = $prod->prod_name;
        product::destroy($id);
        $msg = "Deleted product '$prod_name' successfully!";
        return redirect()->route('admin.product.index')->with('_success', $msg);
    }
}
