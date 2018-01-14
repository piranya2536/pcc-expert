<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['edu_end', 'univ_name', 'univ_province', 'univ_country', 'edu_level',
                             'degree_name', 'fac_name', 'major_name'];
}
