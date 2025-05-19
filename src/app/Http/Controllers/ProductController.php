<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }
}

public function upload(Request $request)
{
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('images', 'public');
        return back()->with('image_path', $path);
    }
    return back()->with('error', '画像が選ばれていません');
}
