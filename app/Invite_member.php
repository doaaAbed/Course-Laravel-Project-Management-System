<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite_member extends Model
{
    //
    protected $table="invite_member";
    protected $primaryKey="invite_id";

    public function get_account_details()
{
    return $this->belongsTo('App\Account','act_id_fk3', 'act_id');
}

    public function get_project_details()
{
    return $this->belongsTo('App\Project', 'project_id_fk3', 'project_id');
}
}
