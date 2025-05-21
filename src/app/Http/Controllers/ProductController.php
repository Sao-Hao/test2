<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index',['products' => $products]);
    }

    public function edit($productId){
        $product = Product::find($productId);
        return view('edit',['form' => $product]);
    }

    public function update(Request $request,$productId)
    {
        $form = $request->only(['name', 'price', 'description', 'image']);
        unset($form['_token']);
        Product::find($productId)->update($form);
        return redirect('/product');
    }
 //  public function upload(Request $request)
  //  {
    //    if ($request->hasFile('image')) {
      //      $path = $request->file('image')->store('images', 'public');
        //    return back()->with('image_path', $path);
        //}
        //return back()->with('error', '画像が選ばれていません');
    //}
}
