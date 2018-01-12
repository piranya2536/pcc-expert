<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Activity extends Model
{
    protected $fillable = ['activity_name', 'date_start', 'date_end', 'expert_id', 'participant_amount', 'status'];
}
