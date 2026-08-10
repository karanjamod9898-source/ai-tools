<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SearchLog extends Model
{
    protected $fillable = [
        'user_id',
        'query',
        'results_count',
        'ip_address',
        'user_agent',
    ];

    protected function casts(): array
    {
        return [
            'results_count' => 'integer',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
