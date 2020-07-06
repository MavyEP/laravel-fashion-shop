<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothe;

class ClothesController extends Controller
{
    public function index() {
      $list_clothes = Clothe::all();
      dd($list_clothes);
    }
}
