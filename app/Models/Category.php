<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Category extends Model
{
    use HasFactory;
    use Searchable;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($category) {
            $category->slug = Str::slug($category->title);
        });
    }

    /**
     * @return void
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
