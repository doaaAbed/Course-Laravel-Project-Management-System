<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigned_project extends Model
{
    //
    protected $table="AssProject";
    protected $primaryKey="assPro_id";


    public function get_account_details()
{
    return $this->belongsTo('App\Account','act_id_fk2', 'act_id');
}

    public function get_project_details()
{
    return $this->belongsTo('App\Project', 'project_id_fk2', 'project_id');
}

}