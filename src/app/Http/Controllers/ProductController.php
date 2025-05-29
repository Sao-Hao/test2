<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Http\Requests\EditRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::Paginate(6);
        return view('index',['products' => $products]);
    }

    public function edit($productId){
        $product = Product::find($productId);
        return view('edit',['form' => $product]);
    }

    public function update(EditRequest $request,$productId)
    {
        $form = $request->only(['name', 'price', 'description', 'image']);
        unset($form['_token']);
        Product::find($productId)->update($form);
        return redirect('/product');
    }

    public function add()
    {
        $seasons = Season::all();
        return view('add', compact('seasons'));
    }

    public function create(Request $request)
    {
        $form = $request->only(['name', 'price', 'description']);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $form['image'] = $path;
        }

        $product = Product::create($form);

        if ($request->has('season')) {
        $product->seasons()->attach($request->season);
        }

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
