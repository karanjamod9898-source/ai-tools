<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class PopularSearch extends Model
{
    protected $fillable = [
        'query',
        'search_count',
        'last_searched_at',
    ];

    protected function casts(): array
    {
        return [
            'search_count' => 'integer',
            'last_searched_at' => 'datetime',
        ];
    }

    public function scopePopular(Builder $query): Builder
    {
        return $query->orderByDesc('search_count');
    }
}
