<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SocialMedia extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_social_media', 'social_media_id', 'user_id')
        // if there is anything besides the 'social_media_id' and 'user_id' it must be written in pivot
        ->withPivot(['url'])
        ->withTimestamps();
    }

    
}
