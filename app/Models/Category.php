<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $table = 'category';
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}