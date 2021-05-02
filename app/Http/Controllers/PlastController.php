<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlastController extends Controller
{
    public function about()
    {
        return view('site.company.plast.about') ;
    }
    public function project()
    {
        return view('site.company.plast.project') ;
    }
}
