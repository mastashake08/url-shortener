<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    //
    protected $fillable = [
      'input_url',
      'output_url',
    ]
}
