<?php

namespace App\Http\Controllers;

use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    //
}



$request->validate([
    'seasons' => 'required|array',
    'seasons.*' => 'in:1,2,3,4', // 季節のIDだけを許可
]);
