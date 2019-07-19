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

class TaskStatus_ctr extends Controller
{
    //
   public function add_new_status($date ,$task_id){
      $obj_status= new TaskStatus();
        $obj_status->act_id_fk5=session('act_id');
         $obj_status->status_task_deadline=$date;
          $obj_status->task_id_fk=$task_id;
           $obj_status->status="New";

        $obj_status->save();  
}

 }
