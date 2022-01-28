<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';
    
    protected $fillable = ['email','password','password_iba','ip'];

    protected $primaryKey = 'id';
}
