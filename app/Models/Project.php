<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['project_code', 'project_name', 'year_fund', 'fund', 'dep'];

    public function activity() {
        return $this->hasMany('App\Models\Activity');
    }
}
