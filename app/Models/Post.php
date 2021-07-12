<?php

namespace App\Models;

use App\Services\BannerService;
use App\Traits\HasLikes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Post extends Model implements Feedable
{
    use HasFactory;
    use HasLikes;
    use Searchable;

    /**
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($post) {
            $post->slug = Str::slug($post->title);
        });
    }

    /**
     * @return FeedItem
     */
    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->excerpt)
            ->updated($this->updated_at)
            ->link(route('blog.post.show', $this->slug))
            ->authorName($this->author->name)
            ->authorEmail($this->autor->email);
    }

    /**
     * @return void
     */
    public static function getFeedItems()
    {
        return self::all();
    }

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var array
     */
    protected $appends = [
        'banner'
    ];

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

    /**
     * @return void
     */
    public function getBannerAttribute()
    {
        return (new BannerService)->getBanner($this);
    }

    /**
     * @return void
     */
    public function getExcerptAttribute()
    {
        return Str::limit($this->body, 200, '...');
    }

    /**
     * @return void
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return void
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category', 'post_id', 'category_id');
    }
}
