<?php

namespace App\Models;
use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    //
    public $guarded = [''];
    public function posts(){
        return $this->hasMany(Post::class);
    }
    use HasFactory;
}
