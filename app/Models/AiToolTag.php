<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AiToolTag extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'type',
    ];

    public function aiTools(): BelongsToMany
    {
        return $this->belongsToMany(AiTool::class, 'ai_tool_tag', 'tag_id', 'ai_tool_id')->withTimestamps();
    }

    public function scopeType(Builder $query, string $type): Builder
    {
        return $query->where('type', $type);
    }
}
