<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = ['expert_id', 'work_start', 'work_end', 'company_name',
                             'position', 'job_des', 'province_id', 'country'];

}
