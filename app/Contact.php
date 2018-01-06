<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $fillable = ['phone', 'phone_list', 'fax', 'fax_id', 
                          'fax_list', 'mobile', 'email', 'facebook', 
                          'twitter', 'line'];
}