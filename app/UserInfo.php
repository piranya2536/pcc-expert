<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = ['address', 'sub_district_id', 'district_id', 'province_id', 'country', 'post_code'];
}
