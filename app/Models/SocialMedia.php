<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_social_media', 'social_media_id', 'user_id')
        ->withTimestamps();
    }

    
}
