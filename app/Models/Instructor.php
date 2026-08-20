<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instructor extends Model
{
    protected $fillable = [
        'name',
        'role',
        'bio',
        'image',
        'specialties',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'specialties' => 'array',
        'is_active' => 'boolean',
    ];

    public function socials(): HasMany
    {
        return $this->hasMany(InstructorSocial::class)->orderBy('sort_order');
    }
}
