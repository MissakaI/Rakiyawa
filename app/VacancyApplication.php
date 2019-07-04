<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacancyApplication extends Model
{
    protected $fillable=[
        'member_id','cv'
    ];

    protected $hidden=['vacancy_id'];
}
