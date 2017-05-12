<?php

namespace App\MODEL;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $table = 'complaints';
    public $timestamps = false;


    public function job()
    {
        return $this->hasMany('App\MODEL\Job', 'id', 'job_nature');
    }

}
