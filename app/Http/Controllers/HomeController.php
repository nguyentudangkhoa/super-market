<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index
    public function ShowIndex(){
        return view('pages.index');
    }
}
