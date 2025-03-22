<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
    protected $fillable = ['user_id', 'unique', 'name', 'phone', 'short_name', 'address', 'email', 'description'];
    
}
