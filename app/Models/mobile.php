<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobile extends Model
{
    use HasFactory;

        // ====invers of one to one 
        public function user(){
            return $this->belongsTo(User::class);
        }
    
}
