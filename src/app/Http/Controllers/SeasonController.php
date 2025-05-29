<?php

namespace App\Http\Controllers;

use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function index(){
        $items = Season::all();
        return view('season.index', ['items'=>$items]);
    }
    public function add(){
        return view('season.add');
    }
    public function create(Request $request){
        $this->validate($request, Season::$rules);
        $form = $request->all();
        Season::create($form);
        return redirect('/Season');
    }
}



$request->validate([
    'seasons' => 'required|array',
    'seasons.*' => 'in:1,2,3,4', // 季節のIDだけを許可
]);


public function create(Request $request)
{
    $form = $request->only(['name', 'price', 'description']);
    $product = Product::create($form);

    if ($request->has('season')) {
        $product->seasons()->attach($request->season); // ←複数選択OK
    }

    return redirect('/product');
}
