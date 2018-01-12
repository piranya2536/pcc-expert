<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_code', 'project_name', 'year_fund', 'fund', 'dep'];
}