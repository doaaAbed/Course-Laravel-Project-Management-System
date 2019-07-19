<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table="Project";
    protected $primaryKey="project_id";

     public function get_creater_data()
{
    return $this->belongsTo('App\Account', 'act_id_fk', 'act_id');
}


     public function get_developer()
{
    return $this->hasMany('App\Assigned_project', 'project_id_fk2', 'project_id');
}


  public function get_invite_member()
{
    return $this->hasMany('App\Account', 'assigned_id_fk4', 'project_id');
}

}
