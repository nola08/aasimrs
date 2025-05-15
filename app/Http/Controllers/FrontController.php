<?php

namespace App\Http\Controllers;

use App\Models\IdentitasModel;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        //$web_ppdb = IdentitasModel::find('1');
        return view('front.home');
    }
}
