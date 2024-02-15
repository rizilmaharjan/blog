<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Enums\UserTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
   

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'type' =>UserTypeEnum::class
    ];

    public function imageUrl(): string
    {
        return Storage::url($this->image);
    }

    public function socialMedia(): BelongsToMany
    {
        // when the laravel convention is not followed we have to pass the extra arguments i.e pivot table name and column names of those pivot table
                                    // whatever we have here its foreign key will be in last
        return $this->belongsToMany(SocialMedia::class, 'user_social_media', 'user_id', 'social_media_id')
        ->withPivot(['url'])

        ->withTimestamps();
    }

    public function articles():HasMany
    {
        return $this->hasMany(Article::class, 'user_id');

    }
}


