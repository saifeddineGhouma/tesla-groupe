<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company ;
use App\Project ;
use App\Photo_Project ;
use DB ;
class ProjectController extends Controller
{
    function create ($company_id)
    {
        $company = Company::find($company_id);
       return view('admines.projects.create',['company'=>$company]);
 
    }
    function store(Request $request)
    {

        DB::transaction(function() use ($request) {
            $project = new Project();
            $project->name = $request->name ;
            $project->company_id = $request->company_id ;
            $project->save() ;
    
            if($request->hasFile('photo'))
            {
                foreach($request->file('photo') as $photo)
                {
                    $name = time() . '_' . $photo->getClientOriginalName();
                    $path = 'files/projects/photo/';
                    $photo->move($path, $name);
    
                   $project_photo = new Photo_Project();
                   $project_photo->project_id = $project->id ;
                   $project_photo->name= $name ;
                   $project_photo->save();
                }
            }
      });
       
 
    }
}
