<?php

namespace App\Models;

use App\Traits\HasLikes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasLikes;

    // protected static function booted()
    // {
    //     static::creating(function ($post) {
    //         if (auth()->user()) {
    //             $post->user_id = auth()->id();
    //         }
    //     });
    // }

    protected $withCount = [
        'likes',
    ];

    /**

     * @return void
     */
    public function likes()
    {
        return $this->hasMany(PostLike::class, 'post_id', 'id');
    }
}
