<?php

namespace App\Models;

use App\Models\Enums\MenuLayoutEnum;
use App\Models\Enums\MenuTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $casts=[
        'type' => MenuTypeEnum::class,
        'layout' =>MenuLayoutEnum::class
    ];

    // self refrencing relationship

    public function children(): HasMany
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
}
