<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = ['major_code', 'major_name_en', 'major_name_th'];

    public function expertise() {
        return $this->hasMany('App\Models\Expertise', 'major_code');
    }
}
