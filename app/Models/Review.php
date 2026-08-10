<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'ai_tool_id',
        'rating',
        'title',
        'review',
        'status',
        'ip_address',
    ];

    protected function casts(): array
    {
        return [
            'rating' => 'integer',
            'deleted_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function aiTool(): BelongsTo
    {
        return $this->belongsTo(AiTool::class);
    }

    public function scopeApproved(Builder $query): Builder
    {
        return $query->where('status', 'approved');
    }

    public function scopePending(Builder $query): Builder
    {
        return $query->where('status', 'pending');
    }
}
