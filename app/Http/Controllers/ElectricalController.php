<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectricalController extends Controller
{
    public function about()
    {
        return view('site.company.electrical.about') ;
    }
    public function project()
    {
       return view('site.company.electrical.project') ;
    }
    public function detaille_project_1()
    {
        return view('site.company.electrical.project.detailler1') ;
    }
    public function detaille_project_2()
    {
        return view('site.company.electrical.project.detailler2') ;
    }
}
