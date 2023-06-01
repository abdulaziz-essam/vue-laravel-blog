<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Comment extends Model
{
    //
    public $guarded = [''];
    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory; 

}
