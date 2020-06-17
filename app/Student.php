<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Fillables here
    protected $fillables = [
        'name',
        'class',
        'languages'
    ];
}
