<div>
    <div class="py-6 px-4 leading-6 text-black bg-white sm:rounded-lg sm:p-6 shadow-xs">
        <article aria-labelledby="post-title" class="text-black">
            <div >
                <h1 id="post-title" class="mx-0 mt-4 mb-2 text-2xl font-bold leading-8 text-gray-900">
                    {{ $post->title }}
                </h1>

                <hr class="m-0 h-0 border-r-0 border-b-0 border-l-0 border-t border-gray-300 border-solid box-border" />
            </div>

            <div class="mt-4 max-w-full text-sm leading-5 text-gray-800 prose">
                <p class="my-5 mx-0">
                    {!! $post->body !!}
                </p>
            </div>

            <div class="flex justify-between mt-6">
                @livewire('blog.like', ['post' => $post], key($post->id))
            </div>
        </article>
    </div>
</div>
