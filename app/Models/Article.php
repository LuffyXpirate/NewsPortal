<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    protected $table = 'article';
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}