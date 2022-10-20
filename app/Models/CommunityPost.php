<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityPost extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function postPic() {
        return $this->hasMany(PostPic::class);
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }
}
