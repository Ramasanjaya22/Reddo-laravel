<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use SoftDeletes;

    public $table = 'characters';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'users_id',
        'point',
        'level',
        'xp',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'users_id');
    }
}
