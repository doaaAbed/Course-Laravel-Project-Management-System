<?php

namespace App\Http\Controllers\operation_ctr;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Project;
use App\Tasks;
use App\Account;
use App\Assigned_project;
use App\TaskStatus;
use App\Invite_member;



class Project_developer_ctr extends Controller
{

///////////////////////////////////////////////////////

     public function display_projects(){
        $all_data=Assigned_project::where("act_id_fk2", "=" ,session('act_id'))->with(['get_project_details'])->get();
         $all_data2=Invite_member::where("email", "=" ,session('email'))->with(['get_project_details'])->get();


        return view('project_task_developer', ['data'=>$all_data , 'invite_data'=>$all_data2] );


    }

 ///////////////////////////////////////////////////////
 public function Accept_inv(Request $req){
//delete from invitation 
        $all_data2=Invite_member::where("email", "=" ,session('email'))->where("project_id_fk3", "=" ,$req['project_id_fk2'])->get();

        $invite_id= $all_data2[0]->invite_id;
        $obj_acc=Invite_member::find($invite_id);
        $result=$obj_acc->delete();
       
//add to assigned
        $obj_acc= new Assigned_project();
        $obj_acc->act_id_fk2=session('act_id');
        $obj_acc->project_id_fk2=$req['project_id_fk2']; 
        $result=$obj_acc->save();
        
        echo json_encode($result);
    }

 ///////////////////////////////////////////////////////
 public function delete_inv(Request $req){
//delete from invitation 
        $all_data2=Invite_member::where("email", "=" ,session('email'))->where("project_id_fk3", "=" ,$req['project_id_fk2'])->get();

        $invite_id= $all_data2[0]->invite_id;
        $obj_acc=Invite_member::find($invite_id);
        $result=$obj_acc->delete();
        


    }

   ///////////////////////////////////////////////////////  

 public function get_task_for_developer($id){

        $all_data=Tasks::where("assigned_id_fk4", "=" ,session('act_id'))->get();
         
        

        if(count($all_data)==0){
            return "You Don't Have task yet ,, ";
        }
        else{ 
         $all_data=Tasks::with('get_status_task')->where("project_id_fk4", "=" ,$id)->where("assigned_id_fk4", "=" ,session('act_id'))->get();
        
        // dd($all_data);
            return view('task_management_developer',  ['data'=>$all_data]);

}
}
//////////////////////////////////////////////////////////////////////////////
    public function edit_task_developer(Request $req){
/// Add new status

        $obj_acc= new TaskStatus();
        $obj_acc->act_id_fk5=session('act_id');
        $obj_acc->status=$req['status']; 
        $obj_acc->task_id_fk=$req['task_id_fk']; 

        $result_add=$obj_acc->save();
        
/// update Note

        $obj_acc=Tasks::find($req['task_id_fk']);
        $obj_acc->task_note=$req['note'];
        
        $result_update=$obj_acc->save();

        if($result_add==1 and $result_update==1){

             $response=array("message"=>"Done Add & Updadte");

        }
        else if($result_add==1){
              $response=array("message"=>"Done Add");
        }

        else if($result_update==1){
              $response=array("message"=>"Done Update");
        }

        else{
              $response=array("message"=>"Nothing change");
        }
         
            echo json_encode($response);
}



    }



