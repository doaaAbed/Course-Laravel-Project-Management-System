<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
    //

    	protected $table="task_status";
    protected $primaryKey="status_task_id";

       public function get_status_of_task()
{
        return $this->belongsTo('App\Tasks', 'task_id_fk', 'task_ids');

}



}
