<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class AiTool extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'description',
        'website_url',
        'logo',
        'cover_image',
        'pricing_type',
        'starting_price',
        'has_free_plan',
        'has_free_trial',
        'status',
        'is_featured',
        'is_verified',
        'average_rating',
        'reviews_count',
        'views_count',
        'clicks_count',
        'meta_title',
        'meta_description',
        'canonical_url',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'starting_price' => 'decimal:2',
            'has_free_plan' => 'boolean',
            'has_free_trial' => 'boolean',
            'is_featured' => 'boolean',
            'is_verified' => 'boolean',
            'average_rating' => 'decimal:2',
            'reviews_count' => 'integer',
            'views_count' => 'integer',
            'clicks_count' => 'integer',
            'published_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'ai_tool_category')->withTimestamps();
    }

    public function getLinkAttribute(): ?string
    {
        return $this->website_url;
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(AiToolTag::class, 'ai_tool_tag', 'ai_tool_id', 'tag_id')->withTimestamps();
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function clicks(): HasMany
    {
        return $this->hasMany(ToolClick::class);
    }

    public function views(): MorphMany
    {
        return $this->morphMany(ToolView::class, 'viewable');
    }

    public function favoritedByUsers(): MorphToMany
    {
        return $this->morphToMany(User::class, 'favoritable', 'favorites')->withTimestamps();
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', 'published')->whereNotNull('published_at');
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    public function scopeVerified(Builder $query): Builder
    {
        return $query->where('is_verified', true);
    }

    public function scopePricingType(Builder $query, string $pricingType): Builder
    {
        return $query->where('pricing_type', $pricingType);
    }
}
