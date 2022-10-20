<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $hidden = ['password', 'remember_token'];

    public function character() {
        return $this->hasOne(Character::class);
    }

    public function finishedBook() {
        return $this->hasMany(FinishedBook::class);
    }

    public function quest() {
        return $this->hasMany(Quest::class);
    }

    public function reminder() {
        return $this->hasMany(Reminder::class);
    }

    public function communityPost() {
        return $this->hasMany(CommunityPost::class);
    }

    public function border() {
        return $this->belongsToMany(Border::class, 'user_borders');
    }
    public function badge() {
        return $this->belongsToMany(Badge::class, 'user_badges');
    }
    public function theme() {
        return $this->belongsToMany(Theme::class, 'user_themes');
    }

    public function comment() {
        return $this->hasMany(Comment::class);
    }
}
