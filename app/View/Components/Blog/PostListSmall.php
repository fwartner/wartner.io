<?php

namespace App\View\Components\Blog;

use App\Models\Post;
use Illuminate\View\Component;

class PostListSmall extends Component
{
    public $posts;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->posts = Post::orderBy('created_at', 'desc')->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog.post-list-small');
    }
}
