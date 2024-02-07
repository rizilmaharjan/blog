<?php

namespace App\Models;

use App\Models\Enums\ArticleStatusEnum;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;
    
    protected $casts = [
        'status' => ArticleStatusEnum::class,
        'published_at' => 'datetime'
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class,'article_tag', 'article_id', 'tag_id')
        ->withTimestamps();
    }
}
