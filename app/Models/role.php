<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

        //============many to many =inverse===========
        public function users(){
            return $this->belongsToMany(user::class);
        }
}
