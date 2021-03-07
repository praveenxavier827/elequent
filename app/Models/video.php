<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
       //============polymorphic ============
       public function comments(){
        return $this->morphMany('App\Models\comment','commentable');
    }
}
