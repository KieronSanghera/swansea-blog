<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
