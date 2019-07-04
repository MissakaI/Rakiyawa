<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyAdmin extends Model
{
    //
    protected $fillable = [
        'company_id','first_name', 'last_name', 'email', 'username', 'password'
    ];
}
