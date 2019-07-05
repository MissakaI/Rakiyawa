<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacancyApplication extends Model
{
    protected $fillable=[
        'vacancy_id','member_id','cv'
    ];

    protected $hidden=[];
}
