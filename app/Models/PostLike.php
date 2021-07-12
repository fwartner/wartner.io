<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'ip_address',
        'user_agent',
    ];

    /**
     * @param [type] $query
     * @param Post $post
     * @return void
     */
    public function scopeForPost($query, Post $post)
    {
        return $query->where('post_id', $post->id);
    }

    /**
     * @param [type] $query
     * @param string $ipAddress
     * @return void
     */
    public function scopeForIp($query, string $ipAddress)
    {
        return $query->where('ip_address', $ipAddress);
    }

    /**
     * @param [type] $query
     * @param string $userAgent
     * @return void
     */
    public function scopeForUserAgent($query, string $userAgent)
    {
        return $query->where('user_agent', $userAgent);
    }
}
