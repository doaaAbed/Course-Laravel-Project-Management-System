<?php

namespace App\Http\Controllers\operation_ctr;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Project_ctr extends Controller
{
    //   
     public function test_test(Request $req){
      $response=array("message"=>$req['project_id_fk3']);
        echo json_encode($response);

 } 

public function add_new_project_m(Request $req){

        $obj_acc= new Project();
        $obj_acc->project_title=$req['add_proj_title'];
        $obj_acc->act_id_fk=$req['act_id'];
        $obj_acc->project_desc=$req['add_proj_desc'];
       // $obj_acc->project_code=$req['project_code'];
        $result=$obj_acc->save();
        $proj_id=$obj_acc->project_id ;
        // $assigned_to=Assigned_project::with('get_account_details')->where("project_id_fk2", "=" ,$proj_id)->get();
          if($result==1){
            $response=array("data"=>$proj_id ,$obj_acc );

        }
        
        echo json_encode($response);

 }


public function update_all_project(Request $req){

     $obj_acc=Project::find($req['proj_id']);
     $obj_acc->project_title=$req['update_projtitle'];
     $obj_acc->project_desc=$req['update_projdesc']; 
        $result=$obj_acc->save();

        if($result==1){

             $response=array("message"=>"done");

        }
        else{
              $response=array("message"=>"invali");
        }
         
            echo json_encode($response);
 }


 public function update_title_project(Request $req){

     $obj_acc=Project::find($req['proj_id']);
     $obj_acc->project_title=$req['proj_title'];
        
        $result=$obj_acc->save();

        if($result==1){

             $response=array("message"=>$obj_acc['project_title']);

        }
echo json_encode($response);
 }



 public function delete_project(Request $req){

     $obj_acc=Project::find($req['project_id']);
      $result=$obj_acc->delete();

        if($result==1){
             $response=array("message"=>"done");

        }
echo json_encode($response);

 }

    public function get_project(Request $req){
        $all_data=Project::where("project_id", "=" ,$req['project_id'])->get(); 
        return json_encode($all_data);
    }


     //display all Projects
    public function doaa(){
        $all_data=Project::where("act_id_fk", "=" ,session('act_id'))->with(['get_developer'])->get();
         return view('projects', ['data'=>$all_data]); 
    }

    //display all Projects

    public function display_projects(){
    	$all_data=Project::get(); 
    	return $all_data;
    }
     //displaty all projects with creater
    public function display_projects_with_owners(){
    	$all_data=Project::with(['get_creater_data'])->get(); 
    	return $all_data;
    }
    
    //displaty specific account with all his projects
     public function display_projects_with_Developer(){
     	
    	$all_data=Project::with(['get_users_assigned_to_project'])->get(); 
    	return $all_data;
    }

}
