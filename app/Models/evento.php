<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $table = 'eventos';

    public function user(){
            return $this->belongsTo('App\user','user_id'); 
    }
}
