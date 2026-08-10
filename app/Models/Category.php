<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'type',
        'description',
        'icon',
        'meta_title',
        'meta_description',
        'sort_order',
        'is_featured',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'sort_order' => 'integer',
            'deleted_at' => 'datetime',
        ];
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function aiTools(): BelongsToMany
    {
        return $this->belongsToMany(AiTool::class, 'ai_tool_category')->withTimestamps();
    }

    public function tools(): BelongsToMany
    {
        return $this->aiTools();
    }

    public function onlineTools(): BelongsToMany
    {
        return $this->belongsToMany(OnlineTool::class, 'online_tool_category')->withTimestamps();
    }

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published');
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    public function scopeType(Builder $query, string $type): Builder
    {
        return $query->where('type', $type);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }
}
