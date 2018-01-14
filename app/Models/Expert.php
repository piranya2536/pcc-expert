<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $fillable = ['user_id', 'id_card',  'title', 'academic_pos', 
                           'fname_th', 'lname_th', 'fname_en', 'lname_en',
                           'gender', 'birthday', 'nationality', 'image', 'bursary', 'interesting'];

    public function user() {
        return $this->belongTo('App\Models\User');
    }

    public function expertise() {
        return $this->hasMany('App\Models\Expertise');
    }

    public function major() {
        return $this->hasMany('App\Models\Major');
    }

    public function work() {
        return $this->hasMany('App\Models\Work');
    }

    
}
