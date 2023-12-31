<?php

namespace App\Models;
use App\Models\Like;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['body', 'user_id'];

    public function likedBy(User $user){
        return $this->likes->contains('user_id',$user->id);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
}
