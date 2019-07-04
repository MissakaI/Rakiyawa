<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable =[
        'company-name', 'web-site', 'company-address', 'year','count', 'company-email','about'
    ];
}
