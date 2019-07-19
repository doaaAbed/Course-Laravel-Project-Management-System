<?php

namespace App\Http\Controllers\operation_ctr;

use Illuminate\Http\Request;
use App\Assigned_project;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Assigned_project_ctr extends Controller
{
    
 	//Displaty  all  Assigned_project -- All Projects with all Developers
    public function display_Developer(){
    	$all_data=Assigned_project::get(); 
    	return $all_data;
    }

    //displaty project with all Developers

    public function display_projects_with_Developer($id){
    	$data['id']=$id;
    	$all_data=Assigned_project::where('project_id_fk2', $data )->get(); 
    	return $all_data;
    }

    

}
