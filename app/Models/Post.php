<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        //we use belongTo because every category have many posts (one to many releation)
        return $this->belongsTo(Category::class);
    }
    public function getRouteKeyName(){
return "slug";
    }

    public function user()
    {
        //we use belongTo because every category have many posts (one to many releation)
        return $this->belongsTo(User::class);
    }
    public function comment(){
             return $this->hasMany(Comment::class);
    }
}
