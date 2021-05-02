<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TradingController extends Controller
{
    public function about()
    {
        return view('site.company.trading.about') ;
    }
    public function project()
    {
       return view('site.company.trading.project') ;
    }
}
