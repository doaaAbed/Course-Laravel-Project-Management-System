<?php

namespace App\Http\Controllers\operation_ctr;

use Illuminate\Http\Request;
use App\Project;
use App\Tasks;
use App\Account;
use App\Assigned_project;
use App\TaskStatus;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class task_ctr extends Controller
{
   //////////////////////////////////////////////////////
    

    public function delete_task(Request $req){

    $obj_acc=Tasks::find($req['task_id']);
    $result=$obj_acc->delete();

    if($result==1){
    $response=array("message"=>"done");}
    echo json_encode($response);

    }

   //////////////////////////////////////////////////////

     public function get_task_status(Request $req){
       
    $all_data=Tasks::with('get_task_assigned')->with('get_status_task')->where("task_ids", "=" ,$req['task_id'])->get();
     
    echo json_encode($all_data);

    }

   //////////////////////////////////////////////////////

    public function get_project_for_task(){
    
    $all_data=Project::where("act_id_fk", "=" ,session('act_id'))->with(['get_developer'])->get();
    return view('task', ['data'=>$all_data]); 
    }


   //////////////////////////////////////////////////////

    public function get_task($id){
    
    $all_data=Tasks::with('get_task_assigned')->where("project_id_fk4", "=" ,$id)->get();
    $project_name=Project::where("project_id", "=" ,$id)->select('project_title')->get();
    $assigned_to=Assigned_project::with('get_account_details')->where("project_id_fk2", "=" ,$id)->get();

    $status_history=TaskStatus::with('get_status_of_task')->where("task_id_fk", "=" ,"2")->get();

     if(count($all_data)==0){
            return "You Don't Have Member yet ,, ";
        }
        else{ 
    return view('task_management',  ['data'=>$all_data,'project_id'=>$id ,'assigned_to'=>$assigned_to  ,'project_name'=>$project_name]); 
}
    }

   //////////////////////////////////////////////////////

    public function edit_task_record(Request $req){

     $obj_acc = Tasks::find($req['task_id']);
	  if ($req->file('id_image')) {
        $ext = pathinfo($req->file('id_image')->getClientOriginalName(),PATHINFO_EXTENSION);
        $new_nameـid_image = uniqid() . "." . $ext;
        $path = $req->file('id_image')->move(public_path() . '/upload_task', $new_nameـid_image);
        $req['t_file_m']=$new_nameـid_image;
    }else
    $date=date("Y-m-d h:i:s",strtotime($req['task_deadline']));

        $p1 = Project::find($req['project_id']);
        $a1 = Account::find(session('act_id'));
      
        $obj_acc->task_title=$req['t_title_m'];
        $obj_acc->task_desc=$req['t_desc_m'];
        $obj_acc->task_file= $req['t_file_m'];
        $obj_acc->task_deadline=$date;
        $obj_acc->task_pro=$req['t_priority_m'];
        $obj_acc->assigned_id_fk4=$req['Assigned_to'];

        $obj_acc->get_task_creater()->associate($a1);
        $obj_acc->get_task_project()->associate($p1);
        $result=$obj_acc->save();
      
        echo json_encode($result);
 }

   //////////////////////////////////////////////////////

    public function add_new_tasks(Request $req){
   
    if ($req->file('id_image')) {
        $ext = pathinfo($req->file('id_image')->getClientOriginalName(),PATHINFO_EXTENSION);
        $new_nameـid_image = uniqid() . "." . $ext;
        $path = $req->file('id_image')->move(public_path() . '/upload_task', $new_nameـid_image);
        $req['new_nameـid_image']=$new_nameـid_image;
    }
    $date=date("Y-m-d h:i:s",strtotime($req['task_deadline']));

        $p1 = Project::find($req['project_id']);
        $a1 = Account::find(session('act_id'));
        $obj_acc= new Tasks();
        $obj_acc->task_title=$req['task_title_m'];
        $obj_acc->task_desc=$req['description'];
        $obj_acc->task_file= $req['new_nameـid_image'];
        $obj_acc->task_deadline=$date;
        $obj_acc->task_pro=$req['role'];
        $obj_acc->assigned_id_fk4=$req['Assigned_to'];
        $obj_acc->get_task_creater()->associate($a1);
        $obj_acc->get_task_project()->associate($p1);
        $result=$obj_acc->save();
        $task_id=$obj_acc->task_ids;
        $task_pro=$obj_acc->task_pro;      
        app('App\Http\Controllers\operation_ctr\TaskStatus_ctr')->add_new_status($date ,$task_id);

        //$response=array("task_id"=>$task_id ,"task_pro"=>$task_pro )
        echo json_encode($task_pro);

 }

       
}
