<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    protected $fillable = ['research_name', 'research_role', 'status', 'short_desc' ];
}
