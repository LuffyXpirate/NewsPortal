<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $table = "category";  // Make sure table name is lowercase and plural (unless it's otherwise)
    
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }
}
