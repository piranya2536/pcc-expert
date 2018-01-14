<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = ['expertise_id', 'major_name_en', 'major_name_th'];

    public function expertise() {
        return $this->belongTo('App\Expertise');
    }
}
