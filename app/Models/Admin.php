<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id'
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function user_id(){
        return $this->hasOne(User::class);
    }
}

