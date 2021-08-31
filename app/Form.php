<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
     protected $fillable = [
         'name', 'mobile_number', 'gender', 'hobbies'
     ];
}