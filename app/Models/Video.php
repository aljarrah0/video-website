<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'skill_video');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'tag_video');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
