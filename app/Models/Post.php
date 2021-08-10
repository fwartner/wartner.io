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
            ->link(route('blog.posts.show', $this->slug))
            ->authorName($this->user->name)
            ->authorEmail($this->user->email);
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
        'banner', 'reading_time',
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
        return Str::limit(strip_tags($this->body), 200, '...');
    }

    /**
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * @return void
     */
    public function getReadingTimeAttribute()
    {
        $word = str_word_count($this->body);
        $m = floor($word / 200);
        $s = floor($word % 200 / (200 / 60));

        if ($m == 0) {
            return '1 minute';
        } elseif ($s == 0) {
            return $m . ' minute' . ($m == 1 ? '' : 's');
        } else {
            return $m . ' minute' . ($m == 1 ? '' : 's') . ', ' . $s . ' second' . ($s == 1 ? '' : 's');
        }
    }
}
