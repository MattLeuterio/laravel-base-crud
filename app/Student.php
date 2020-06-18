<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Fillables here
    protected $fillable = [
        'name',
        'class',
        'languages'
    ];
}
