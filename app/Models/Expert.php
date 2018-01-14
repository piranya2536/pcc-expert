<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $fillable = ['user_id', 'id_card',  'title', 'academic_pos', 
                           'fname_th', 'lname_th', 'fname_en', 'lname_en',
                           'gender', 'birthday', 'nationality', 'image', 'bursary'];

    public function user() {
        return $this->belongTo('App\User');
    }

    public function expertise() {
        return $this->hasMany('App\Expertise');
    }

    public function major() {
        return $this->hasMany('App\Major');
    }

    public function work() {
        return $this->hasMany('App\Work');
    }

    
}
