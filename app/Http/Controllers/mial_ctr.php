<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mial_ctr extends Controller
{
    //
	public function send_email($email ,$code_rand){
 //  $data=array("dd"=>'doaa');
$data=array("email"=>$email ,"code_rand"=>$code_rand);
\Mail::send('send_inv_email', $data, function ($message) use ($data) {
$message->from('mepi.task@gmail.com', 'invitaion');
$message->to('doaa.abed94@hotmail.com');
});


} 

}


