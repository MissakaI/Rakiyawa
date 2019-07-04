<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable =[
        'name', 'website', 'foundation_year', 'employee_count','about'
    ];
    // protected $table= 'companies';
}
