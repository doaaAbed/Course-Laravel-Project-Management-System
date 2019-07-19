<?php

namespace App\Http\Controllers\operation_ctr;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Invite_member;

class Invite_member_ctr extends Controller

{
      public function add_invited_member(Request $req){
      	
      	$obj_acc= new Invite_member();
        $obj_acc->project_id_fk3=$req['project_id_fk3'];
        $obj_acc->email=$req['email'];
        $obj_acc->act_id_fk3=$req['act_id_fk3'];
        $obj_acc->code_rand=uniqid();
        $result=$obj_acc->save();
        $email=$obj_acc->email;
        $code_rand=$obj_acc->code_rand;
        $invite_id=$obj_acc->invite_id;
     
        app('App\Http\Controllers\mial_ctr')->send_email($email ,$code_rand);

        $response=array("email"=>$email , "code_rand"=>$code_rand , "inv_id"=>$invite_id);

            echo json_encode($response);

 } 

      public function get_invited_member(Request $req){
        $all_data=Invite_member::where("project_id_fk3", "=" ,$req['project_id_fk3'])->get();
		    //   $response=array("all_invited_member"=>$all_data);
          echo json_encode($all_data);

        

 } 

   public function resend_code(Request $req){
    
        $obj_acc=Invite_member::find($req['inv_id']);
        $obj_acc->code_rand=uniqid();
        $result=$obj_acc->save();
        $email=$obj_acc->email;
        $code_rand=$obj_acc->code_rand;
        app('App\Http\Controllers\mial_ctr')->send_email($email ,$code_rand);

        $invite_id=$obj_acc->invite_id;
   
            echo json_encode($code_rand);

 } 


 
}
