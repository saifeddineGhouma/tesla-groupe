<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultingController extends Controller
{
    public function about()
    {
        return view('site.company.consulting.about') ;
    }
    public function project()
    {

        return view('site.company.consulting.project') ;
    }
}
