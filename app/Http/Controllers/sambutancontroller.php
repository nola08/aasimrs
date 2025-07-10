<?php

namespace App\Http\Controllers;

use App\Models\IdentitasModel;
use App\Models\sambutanModel;
use Illuminate\Http\Request;

class sambutancontroller extends Controller
{
    public function index ()
     {
    $sambutan = sambutanModel::get();
    return view('front.sambutan.index',compact('sambutan'));
   }
}
