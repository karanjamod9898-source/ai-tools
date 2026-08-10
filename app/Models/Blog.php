<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'status',
        'is_featured',
        'views_count',
        'meta_title',
        'meta_description',
        'canonical_url',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'views_count' => 'integer',
            'published_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(BlogTag::class, 'blog_tag', 'blog_id', 'tag_id')->withTimestamps();
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
}
