<?php

namespace App\Traits;

trait HasLikes
{
    public function isLiked(): bool
    {
        if (auth()->user()) {
            return auth()->user()->likes()->forPost($this)->count();
        }

        if (($ip = request()->ip()) && ($userAgent = request()->userAgent())) {
            return $this->likes()->forIp($ip)->forUserAgent($userAgent)->count();
        }

        return false;
    }

    public function removeLike(): bool
    {
        if (auth()->user()) {
            return auth()->user()->likes()->forPost($this)->delete();
        }

        if (($ip = request()->ip()) && ($userAgent = request()->userAgent())) {
            return $this->likes()->forIp($ip)->forUserAgent($userAgent)->delete();
        }

        return false;
    }
}
