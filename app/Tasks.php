<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    //


	protected $table="tasks";
    protected $primaryKey="task_ids";

    public function get_task_creater()
{
    return $this->belongsTo('App\Account','act_id_fk4', 'act_id');
}

   public function get_task_assigned()
{
    return $this->belongsTo('App\Account','assigned_id_fk4', 'act_id');
}

    public function get_task_project()
{
    return $this->belongsTo('App\Project', 'project_id_fk4', 'project_id');
}


    public function get_status_task()
{
    return $this->hasMany('App\TaskStatus', 'task_id_fk', 'task_ids');
}

}
