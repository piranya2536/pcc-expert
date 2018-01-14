<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $fillable = [ 'expert_id', 'expertise_name_en', 'expertise_name_th'];

    public function expert() {
        return $this->belongTo('App\Expert');
    }
    public function major() {
        return $this->hasMany('App\Major');
    }
}
