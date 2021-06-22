<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company ;
use App\Service ;
class ServiceController extends Controller
{
   function create ($company_id)
   {
       $company = Company::find($company_id);
      return view('admines.services.create',['company'=>$company]);

   }
   function store(Request $request)
   {
       $service = new Service();
       $service->name_fr = $request->name_fr ;
       $service->name_en = $request->name_en ;
       $service->description_fr = $request->description_fr ;
       $service->description_en = $request->description_en ;
       $service->company_id = $request->company_id ;
       $service->save() ;

       dd($service);

   }
}
