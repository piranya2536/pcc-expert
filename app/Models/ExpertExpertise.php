<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpertExpertise extends Model
{
    protected $fillable = [ 'expert_id', 'major_id', 'expertise_id'];
}
