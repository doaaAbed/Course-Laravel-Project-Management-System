<?php

// Retrive Data

Route::POST('/delete_task','operation_ctr\task_ctr@delete_task' );

Route::POST('/get_task_status','operation_ctr\task_ctr@get_task_status' );


Route::get('/task_management/{id}','operation_ctr\task_ctr@get_task' );

////////

Route::get('/projects',function(){

return view('projects');
});



Route::get('/task_d',function(){

return view('task_management_developer');
});


Route::post('/update_my_account','operation_ctr\Account_ctr@update_my_account' );


Route::get('/dash','operation_ctr\Account_ctr@get_basic_account_data' );

Route::get('/uploadImg',function(){

return view('sendemail');
});

Route::post('/edit_task_record','operation_ctr\task_ctr@edit_task_record' );
Route::post('/add_new_tasks','operation_ctr\task_ctr@add_new_tasks' );
Route::get('/task','operation_ctr\task_ctr@get_project_for_task' );



Route::get('/send_email','mial_ctr@send_email' );

Route::post('/table',['uses'=>'operation_ctr\Project_ctr@send_email']);

Route::post('/test_img','operation_ctr\Account_ctr@test_img' );

Route::get('/get_basic_account_data/id/{id?}',
	['uses'=>'operation_ctr\Account_ctr@get_basic_account_data']);
Route::get('/get_accounts_with_created_project','operation_ctr\Account_ctr@get_accounts_with_created_project' );
Route::get('/get_account_data_with_assigned_project','operation_ctr\Account_ctr@get_account_data_with_assigned_project' );


Route::post('/resend_code','operation_ctr\Invite_member_ctr@resend_code' );
Route::post('/add_invited_member','operation_ctr\Invite_member_ctr@add_invited_member' );
Route::post('/get_invited_member','operation_ctr\Invite_member_ctr@get_invited_member' );

//ADD & UPDATE & DELETE Accoount


//ADD & UPDATE & DELETE Project

Route::post('/invite_new_member
','operation_ctr\Project_ctr@invite_new_member
' );



Route::post('/test_test','operation_ctr\Project_ctr@test_test' );
Route::post('/update_title_project','operation_ctr\Project_ctr@update_title_project' );

Route::post('/edit_project_m','operation_ctr\Project_ctr@edit_project_m' );

Route::post('/update_all_project','operation_ctr\Project_ctr@update_all_project' );

Route::post('/get_project','operation_ctr\Project_ctr@get_project' );
Route::post('/add_new_project_m','operation_ctr\Project_ctr@add_new_project_m' );
Route::post('/delete_project','operation_ctr\Project_ctr@delete_project' );

Route::post('/check_login','operation_ctr\Account_ctr@check_login');
Route::post('/update_accounts','operation_ctr\Account_ctr@update_accounts' );
Route::post('/delete_account','operation_ctr\Account_ctr@delete_account' );
Route::get('/delete_account_g/id/{id}',
	['uses'=>'operation_ctr\Account_ctr@delete_account_g']);
Route::get('/doaa','operation_ctr\Project_ctr@doaa' );

Route::get('/test','operation_ctr\Account_ctr@store' );



//
Route::get('/page2',function(){

return view('master.page2');
});


Route::get('/display_projects','operation_ctr\Project_ctr@display_projects' );

Route::get('/Assigned_project','operation_ctr\Assigned_project_ctr@display_Developer' );



Route::get('/form',function(){

return view('form');
});



// section # 1 # Sign in & sign up & control Panel
Route::get('/',function(){

return view('login');
});

Route::post('/add_new_accounts','operation_ctr\Account_ctr@add_new_accounts' );

Route::GET('/register/{email?}/{code?}',['uses'=>'operation_ctr\Account_ctr@register_page' ]);

Route::post('/get_code','operation_ctr\Account_ctr@get_code' );

Route::get('/forgetpass',function(){

return view('forgetpass');
});

//////////////// Projects & Tasks pages of Developer //////////////////////////////

Route::get('/display_projects','operation_ctr\Project_developer_ctr@display_projects');
Route::get('/task_management_developer/{id}','operation_ctr\Project_developer_ctr@get_task_for_developer');

Route::post('/Accept_inv','operation_ctr\Project_developer_ctr@Accept_inv');
Route::post('/delete_inv','operation_ctr\Project_developer_ctr@delete_inv');
Route::post('/edit_task_developer','operation_ctr\Project_developer_ctr@edit_task_developer' );



/////////////////////////////////////////////////////////////////////////////////