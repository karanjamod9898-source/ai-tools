<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ToolView extends Model
{
    protected $fillable = [
        'viewable_type',
        'viewable_id',
        'user_id',
        'ip_address',
        'user_agent',
    ];

    public function viewable(): MorphTo
    {
        return $this->morphTo();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
