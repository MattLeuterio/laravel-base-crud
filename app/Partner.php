<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
      // Fillables here
      protected $fillable = [
        'company-name',
        'slogan',
        'job'
    ];
}
