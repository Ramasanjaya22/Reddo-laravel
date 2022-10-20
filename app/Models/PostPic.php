<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostPic extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function communityPost() {
        return $this->belongsTo(CommunityPost::class);
    }
}
