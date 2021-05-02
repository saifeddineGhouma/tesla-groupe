<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function  index()
    {
        return view('admines.companies.index');
    }
    function create ()
    {
        return view('admines.companies.create');
    }
}
