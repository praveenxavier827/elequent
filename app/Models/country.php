<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
    // ====Has Many Through
    public function posts(){
        return $this->hasManyThrough(Post::class,User::class);
    }
}
