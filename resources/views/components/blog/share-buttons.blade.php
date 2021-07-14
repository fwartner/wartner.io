<div>
    <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"
        class="relative inline-block text-left">
        <div>
            <button type="button" class="-m-2 p-2 rounded-full flex items-center text-gray-400 hover:text-gray-600"
                id="share-1" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open">
                <span class="sr-only">Open options</span>
                <svg class="h-5 w-5" x-description="solid/dots-vertical" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path
                        d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                    </path>
                </svg>
            </button>
        </div>

        <div x-show="open" x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
            role="menu" aria-orientation="vertical" aria-labelledby="share-1" style="display: none;">
            <div class="py-1" role="none">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.posts.show', $post->slug) }}&t={{ $post->title}}"
                    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                    class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem"
                    target="_blank">
                    <svg class="mr-3 h-5 w-5 text-gray-400" x-description="solid/share"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path
                            d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z">
                        </path>
                    </svg>

                    <span>Share to Facebook</span>
                </a>

                <a href="https://twitter.com/share?url={{ route('blog.posts.show', $post->slug) }}&via=wartner.io&amp;text={{ $post->title }}"
                    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                    class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem"
                    target="_blank">
                    <svg class="mr-3 h-5 w-5 text-gray-400" x-description="solid/share"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path
                            d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z">
                        </path>
                    </svg>

                    <span>Share to Twitter</span>
                </a>

                <a href="http://www.reddit.com/submit?url={{ route('blog.posts.show', $post->slug) }}&title={{ $post->title }}"
                    class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem"
                    target="_blank">
                    <svg class="mr-3 h-5 w-5 text-gray-400" x-description="solid/share"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path
                            d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z">
                        </path>
                    </svg>

                    <span>Share to Reddit</span>
                </a>

                <a x-data="{url: '{{ route('blog.posts.show', $post->slug) }}'}"
                    @click.prevent="copyToClipboard(url);alert('Copied!');" href="#"
                    class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                    <svg class="mr-3 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
                        </path>
                    </svg>

                    <span>Copy Link</span>
                </a>
            </div>
        </div>
    </div>
</div>
