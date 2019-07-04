<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyAdmin extends Model
{
    //
    protected $fillable = [
        'name', 'website', 'foundation_year', 'employee_count', 'about'
    ];
}
