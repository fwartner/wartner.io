<?php

namespace App\Services;

use App\Models\Post;

class BannerService
{
    /**
     * @param Post $post
     * @return void
     */
    public function getBanner(Post $post)
    {
        if ($post->categories) {
            return 'https://banners.beyondco.de/' . $post->title . $post->categories->first()->banner;
        }

        return null;
    }
}
