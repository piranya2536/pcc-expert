<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $fillable = ['major_code', 'expertise_code', 'expertise_name_en', 'expertise_name_th'];

    public function major() {
        return $this->belongTo('App\Models\Major', 'major_code');
    }
}
