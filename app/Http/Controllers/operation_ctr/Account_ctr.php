<?php

namespace App\Http\Controllers\operation_ctr;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Account;
use App\AssignedProject;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Invite_member;

class Account_ctr extends Controller
{


    //SELECT 
    public function get_basic_account_data(){
            $all_data=Account::where('act_id',"=",session('act_id'))->get();   
             return view('dashboard', ['data'=>$all_data]); 

}

    public function chech_project_code($id=0){
      
        $all_data=Invite_member::where("code_rand", "=" ,$id)->get();
         if($all_data==null)
         {
            $response=array("email"=>"" , "code_rand"=>"");

         }
         else{
             $email=$all_data->email;
            $code_rand=$all_data->code_rand;

        $response=array("email"=>$email , "code_rand"=>$code_rand);
        }
          
    
        echo json_encode($response);
    
}



    public function update_my_account(Request $req)
    {
      $obj_acc=Account::find(session('act_id'));
      
        $obj_acc->first_name=$req['first_name'];
        $obj_acc->father_name=$req['father_name'];
        $obj_acc->Last_name=$req['Last_name'];
        $obj_acc->role=$req['role'];
        $obj_acc->email=$req['email'];
        $obj_acc->password=$req['password'];
        $obj_acc->status="1";
        
        $result=$obj_acc->save();
        
     return json_encode($obj_acc); 

    }



        public function update_image(Request $req)
    {
        if ($req->file('id_image')) {
        $ext = pathinfo($req->file('id_image')->getClientOriginalName(),PATHINFO_EXTENSION);
       
        $new_nameـid_image = uniqid() . "." . $ext;
        $path = $req->file('id_image')->move(public_path() . '/uploads', $new_nameـid_image);
        echo $new_nameـid_image;

        $obj_acc=Account::find(session('act_id'));
        $obj_acc->img_name=$new_nameـid_image;
        $result=$obj_acc->save();

    }
    else {
        echo "no data";
    }
}


    //SELECT 
    public function get_basic_account_data_test($id=0){

        if($id==0){
            $all_data=Account::get(); 
        }

        else{
            $all_data=Account::where('act_id',"=",$id)->get();   
                }
 return $all_data;
    
}

 

    public function get_accounts_with_created_project(){
        $all_data=Account::with(['get_projects_created_by_user'])->get(); 
        return $all_data;
    }
    
    public function get_account_data_with_assigned_project(){
        $all_data=Account::with(['get_projects_assinged_by_user'])->get(); 
        return $all_data;
    }

 // add_new_accounts //////////////////////////////////////////////////////////////////////////////////

  public function register_page($email="", $code=""){
    if($email==""and $code=""){
        return view('register' , ['email'=>$email , 'code'=>$code]);

    }
    else{
      
  return view('register' , ['email'=>$email , 'code'=>$code]);
       
    }
        
    }


 // add_new_accounts //////////////////////////////////////////////////////////////////////////////////

  public function get_code(Request $req){
          $all_data=Invite_member::where("code_rand", "=" ,$req['code'])->get()->count();

          if($all_data==1){
       $response=array("code"=>"haveData") ;
          } 
          else if($all_data==0){
             $response=array("code"=>"nullData") ;
          }
       echo json_encode($response);
         

        

 } 

 // add_new_accounts //////////////////////////////////////////////////////////////////////////////////
    public function add_new_accounts(Request $req){

    $validator = \Validator::make($req->all(), [
       'first_name' => 'required|min:2',
       'father_name' => 'required|min:2',
      'Last_name' => 'required|min:2',
        'email' => 'required|email|unique:account',
        'password' => 'required|min:8|max:30|confirmed',
          'password' => 'required | confirmed ',
        'password_confirmation' => 'required ',

    
   ]);
        if ($validator->fails()) {
            $mess=$validator->errors();
             $response=array("errors"=>$mess , "code"=>422 , "message"=>"validiation") ;
 }
 else {

        try {

      if ($req->file('id_image')) {
        $ext = pathinfo($req->file('id_image')->getClientOriginalName(),PATHINFO_EXTENSION);
        // if ($ext=="png" || $ext=="jpg" || $ext=="gif") {}
        $new_nameـid_image = uniqid() . "." . $ext;
        $path = $req->file('id_image')->move(public_path() . '/uploads', $new_nameـid_image);
        $req['new_nameـid_image']=$new_nameـid_image;
    }else {
 $req['new_nameـid_image']="doaa.png";

    }
        $obj_acc= new Account();
        $obj_acc->first_name=$req['first_name'];
        $obj_acc->father_name=$req['father_name'];
        $obj_acc->Last_name=$req['Last_name'];
        $obj_acc->role=$req['role'];
        $obj_acc->email=$req['email'];
        $obj_acc->password=$req['password'];
        $obj_acc->status="0";
        $obj_acc->img_name= $req['new_nameـid_image'];
        $result=$obj_acc->save();
 if($result==0){  
            $response=array("success" => true, "errors" => null,"message"=>"fail");
        }else {

            $response=array("success" => true, "errors" => null, "message"=>"success");     
        } }

         catch(\Exception $error_info){
            $error_code=$error_info->getCode();
            $error_message=$error_info->getMessage(); 


            if($error_code==23000){

               if(strpos($error_message,'1062') !== false){
                 //  echo $error_message;
                    $response=array("success" => true, "errors" => null, "message"=>"email_red"); 
                }

                 
              if(strpos($error_message,'1048') !== false){
                 //  echo $error_message;
                    $response=array("success" => true, "errors" => null, "message"=>"rong_input"); 
                }
             }
             else{
                 $response=array("success" => true, "errors" => null,"message"=>"unknown_error");
             }
            }

          }
        

            echo json_encode($response);
    }


//UPDATE

    public function update_accounts(Request $req)
    {
        $obj_acc=Account::find($req['act_id']);
        $obj_acc->first_name=$req['first_name'];
        $obj_acc->father_name=$req['father_name'];
        $obj_acc->Last_name=$req['Last_name'];
        $obj_acc->role=$req['role'];
        $obj_acc->email=$req['email'];
        $obj_acc->password=$req['password'];
        $obj_acc->status=$req['status'];
        
        $result=$obj_acc->save();
        
    

    }




//DELETE BY POST

    public function delete_account(Request $req)
    {
        $obj_acc=Account::find($req['act_id']);
         $result=$obj_acc->delete();
         echo $result;

    }
   

//DELETE BY GET


    public function delete_account_g($id)
    {
        $obj_acc=Account::find($id);
         $result=$obj_acc->delete();
         echo $result;

    }
   




 public function check_login(Request $req)
    {
        
        $data=Account::where ([ ["email","=",$req['email']] , ["password","=",$req['password']] ]) ->get();
        if(count($data)==0){

            $response=array("message"=>"fail");
        }else {

            $req->session()->put("act_id",$data[0]['act_id']);
            $req->session()->put("first_name",$data[0]['first_name']);
            $req->session()->put("father_name",$data[0]['father_name']);
             $req->session()->put("Last_name",$data[0]['Last_name']);
            $req->session()->put("role",$data[0]['role']);
            $req->session()->put("email",$data[0]['email']);
             $req->session()->put("img_name",$data[0]['img_name']);
            $response=array("message"=>"success");
        }

            echo json_encode($response);

    }

}

