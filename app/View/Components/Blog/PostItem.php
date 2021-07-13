<?php

namespace App\View\Components\Blog;

use App\Models\Post;
use Illuminate\View\Component;

class PostItem extends Component
{
    /**
     * @var Post
     */
    public $post;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog.post-item');
    }
}
