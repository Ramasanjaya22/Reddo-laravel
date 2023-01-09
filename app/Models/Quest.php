<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;

    // Kolom-kolom yang dapat diisi secara mass assignment
    protected $fillable = [
        'title',
        'description',
        'reward',
    ];

    /**
     * Relasi one-to-one dengan model Character
     */
    public function character()
    {
        return $this->belongsTo(Character::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
