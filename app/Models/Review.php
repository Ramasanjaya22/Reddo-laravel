<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function finishedBook() {
        return $this->belongsTo(FinishedBook::class);
    }

    public function reviewComment() {
        return $this->hasMany(ReviewComment::class);
    }
}
