<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable=[
        'company_id','job_title','job_position','deadline','description','brochure','contact_info','location'
    ];

    protected $hidden=[];
}
