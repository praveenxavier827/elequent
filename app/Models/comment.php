<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'audio'=>'App\Models\audio',
    'video'=>'App\Models\video',
]);

class comment extends Model
{
    use HasFactory;
     //============polymorphic ============
     public function commentable(){
        return $this->morphTo();
    }
}
