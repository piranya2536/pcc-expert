<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Activity extends Model
{
    protected $fillable = ['project_id', 'activity_name', 'date_start', 'date_end', 'expert_id', 'participant_amount', 'status'];


    public function project() {
        return $this->belongTo('App\Project');
    }
}
