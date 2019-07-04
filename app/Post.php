<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='vacancies';
    public $primaryKey ='id';
    public $timestream = true;
}
