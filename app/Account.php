<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //

    protected $table="account";
    protected $primaryKey="act_id";


    public function get_projects_created_by_user()
{
    return $this->hasMany('App\Project', 'act_id_fk', 'act_id');
}

   public function get_projects_assinged_by_user()
{
    return $this->hasMany('App\Assigned_project', 'act_id_fk2', 'act_id');
}

   public function get_invite_member()
{
    return $this->hasMany('App\Invite_member', 'act_id_fk3', 'act_id');
}



 public function check_login()
{

		echo "Doaa";
}


}
