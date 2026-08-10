<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'group',
        'key',
        'value',
        'type',
        'is_public',
    ];

    protected function casts(): array
    {
        return [
            'is_public' => 'boolean',
        ];
    }

    public function scopePublic(Builder $query): Builder
    {
        return $query->where('is_public', true);
    }

    public function scopeGroup(Builder $query, string $group): Builder
    {
        return $query->where('group', $group);
    }
}
