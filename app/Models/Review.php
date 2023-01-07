<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function finishedBook()
    {
        return $this->belongsTo(FinishedBook::class);
    }

    public function reviewComment()
    {
        return $this->hasMany(ReviewComment::class);
    }
}
