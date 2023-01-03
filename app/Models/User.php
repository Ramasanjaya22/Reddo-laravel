<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];

    protected $hidden = ['password', 'remember_token'];

    public function character()
    {
        return $this->hasOne("App\Models\Character", 'users_id', 'id');
    }

    public function finishedBook()
    {
        return $this->hasMany(FinishedBook::class);
    }

    public function quest()
    {
        return $this->hasMany(Quest::class);
    }

    public function reminder()
    {
        return $this->hasMany(Reminder::class);
    }

    // public function communityPost() {
    //     return $this->hasMany(CommunityPost::class);
    // }
    public function communities()
    {
        return $this->belongsToMany(Community::class, 'community_user');
    }

    public function border()
    {
        return $this->belongsToMany(Border::class, 'user_borders');
    }
    public function badge()
    {
        return $this->belongsToMany(Badge::class, 'user_badges');
    }
    public function theme()
    {
        return $this->belongsToMany(Theme::class, 'user_themes');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function reviewComment()
    {
        return $this->hasMany(ReviewComment::class);
    }

    public function detailUser()
    {
        return $this->hasOne(DetailUser::class, 'users_id', 'id');
    }
}
