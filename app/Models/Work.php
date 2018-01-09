<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['expert_id', 'work_start', 'work_end', 'company_name',
                             'position', 'jop_des', 'province_id', 'country_id'];

}
