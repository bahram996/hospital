<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function nobat()
    {
        return view('home.nobat.index');
    }
}
