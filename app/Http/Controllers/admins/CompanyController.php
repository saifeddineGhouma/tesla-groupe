<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company ;
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
    function store(Request $request)
    {
      //  if ($request->hasFile('photo')) {
        
           $photo = time() . '_' . $request->file('photo')->getClientOriginalName();
				 
                  $path = 'files/company/photo/';
                  $request->file('photo')->move($path, $photo);
   
        $company = new Company();
        $company->name = $request->name;
        $company->fonction = $request->fonction;
        $company->date_creation = $request->date_create;
        $company->photo = $photo;
        $company->description_fr = $request->description_fr;
        $company->description_en = $request->description_en;
        $company->save();
        dd($company);
    //    }
     
    }
	
	function edit($company_id)
	{
		$company = Company::find($company_id);
		return view('admines.companies.edit',['company'=>$company]);
	}
}
