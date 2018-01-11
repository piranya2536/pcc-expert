<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   protected  $fillable = ['project_name', 'acti_name', 'acti_start', 'acti_end', 'role', 'short_desc' ];
}
