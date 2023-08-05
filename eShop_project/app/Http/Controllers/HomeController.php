<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data = product::orderByDesc('id')->paginate(9);
        if ($key = request()->key) {
            $data = product::orderBy('id', 'desc')->where('prod_name', 'like', '%' . $key . '%')->paginate(5);
        }
        return view('/welcome')->with('data', $data);
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
