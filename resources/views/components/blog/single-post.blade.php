<div>
    <div class="py-6 px-4 leading-6 text-black bg-white sm:rounded-lg sm:p-6 shadow-xs">
        <article aria-labelledby="post-title" class="text-black">
            <div class="">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <img class="block w-10 max-w-full h-10 align-middle rounded-full"
                            src="https://rappasoft.com/storage/profile-photos/VDtz9vTHEiu0wjShRTyZtfBhdI9EvQDD8WwGVW3E.png"
                            alt="Anthony Rappa" />
                    </div>

                    <div class="flex-1" style="min-width: 0px;">
                        <p class="m-0 text-sm font-medium leading-5 text-gray-900">
                            <a href="#author" class="cursor-pointer">Anthony Rappa</a>
                        </p>

                        <p class="m-0 text-sm leading-5 text-gray-600">
                            <time datetime="2021-05-08" class=""> May 8th, 2021 </time>

                            <span aria-hidden="true" class=""> · </span>

                            <span class=""> 1 min read </span>
                        </p>
                    </div>

                    <div class="flex z-50 flex-shrink-0 self-center">
                        <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"
                            class="inline-block relative text-left">
                            <div class="">
                                <button type="button"
                                    class="flex items-center p-2 -m-2 text-center text-gray-500 normal-case bg-transparent bg-none rounded-full cursor-pointer hover:text-gray-700"
                                    id="share-1" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open"
                                    style="font-size: 128%;">
                                    <span class="border-gray-300 border-solid sr-only box-border">Open options</span>
                                    <svg class="block w-5 h-5 align-middle" x-description="solid/dots-vertical"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"
                                            class=""></path>
                                    </svg>
                                </button>
                            </div>

                            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="hidden absolute right-0 mt-2 w-56 bg-white rounded-md shadow-xs" role="menu"
                                aria-orientation="vertical" aria-labelledby="share-1"
                                style="display: none; transform-origin: right top;">
                                <div class="py-1" role="none">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Frappasoft.com%2Fblog%2Fsnippet-3-making-the-logged-in-user-available-to-all-views-using-view-composers&amp;t=Snippet 3: Making the logged in user available to all views using view composers"
                                        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                        class="flex py-2 px-4 text-sm leading-5 text-gray-800 cursor-pointer hover:bg-gray-200 hover:text-gray-900"
                                        role="menuitem" target="_blank">
                                        <svg class="block mr-3 w-5 h-5 text-gray-500 align-middle"
                                            x-description="solid/share" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"
                                                class=""></path>
                                        </svg>

                                        <span class="">Share to Facebook</span>
                                    </a>

                                    <a href="https://twitter.com/share?url=https%3A%2F%2Frappasoft.com%2Fblog%2Fsnippet-3-making-the-logged-in-user-available-to-all-views-using-view-composers&amp;via=Rppasoft&amp;text=Snippet 3: Making the logged in user available to all views using view composers"
                                        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                        class="flex py-2 px-4 text-sm leading-5 text-gray-800 cursor-pointer hover:bg-gray-200 hover:text-gray-900"
                                        role="menuitem" target="_blank">
                                        <svg class="block mr-3 w-5 h-5 text-gray-500 align-middle"
                                            x-description="solid/share" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"
                                                class=""></path>
                                        </svg>

                                        <span class="">Share to Twitter</span>
                                    </a>

                                    <a href="http://www.reddit.com/submit?url=https%3A%2F%2Frappasoft.com%2Fblog%2Fsnippet-3-making-the-logged-in-user-available-to-all-views-using-view-composers&amp;title=Snippet+3%3A+Making+the+logged+in+user+available+to+all+views+using+view+composers"
                                        class="flex py-2 px-4 text-sm leading-5 text-gray-800 cursor-pointer hover:bg-gray-200 hover:text-gray-900"
                                        role="menuitem" target="_blank">
                                        <svg class="block mr-3 w-5 h-5 text-gray-500 align-middle"
                                            x-description="solid/share" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path
                                                d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"
                                                class=""></path>
                                        </svg>

                                        <span class="">Share to Reddit</span>
                                    </a>

                                    <a x-data="{url: 'https://rappasoft.com/blog/snippet-3-making-the-logged-in-user-available-to-all-views-using-view-composers'}"
                                        @click.prevent="copyToClipboard(url);alert('Copied!');" href="#"
                                        class="flex py-2 px-4 text-sm leading-5 text-gray-800 cursor-pointer hover:bg-gray-200 hover:text-gray-900"
                                        role="menuitem">
                                        <svg class="block mr-3 w-5 h-5 text-gray-500 align-middle"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"
                                                class=""></path>
                                        </svg>

                                        <span class="">Copy Link</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 id="post-title" class="mx-0 mt-4 mb-2 text-2xl font-bold leading-8 text-gray-900">
                    Snippet 3: Making the logged in user available to all views using view
                    composers
                </h1>

                <hr class="m-0 h-0 border-r-0 border-b-0 border-l-0 border-t border-gray-300 border-solid box-border"
                    style="border-width: 0px;" />
            </div>

            <div class="mt-4 max-w-full text-sm leading-5 text-gray-800 prose">
                <p class="my-5 mx-0">
                    I feel like you don't hear about using view composers in Laravel
                    anymore, like it's a dying feature that I never see in anyone's projects
                    but mine. It's still prominent in the documentation. I just don't think
                    many newcomers know about the feature itself.
                </p>
                <p class="my-5 mx-0">
                    Anyway, I don't use it too much, only when I know I have a small piece
                    of data that I'll need in more than one view.
                </p>
                <p class="my-5 mx-0">
                    In all of my projects, I usually bind the currently logged-in user (or
                    lack thereof) to a
                    <strong class="font-semibold text-gray-900">$logged_in_user</strong>
                    variable.
                </p>
                <p class="my-5 mx-0">
                    First, add a
                    <strong class="font-semibold text-gray-900">ComposerServiceProvider</strong>
                    to your
                    <strong class="font-semibold text-gray-900">App/Providers</strong>
                    folder and register it in your
                    <strong class="font-semibold text-gray-900">app.php</strong> config file
                    under the
                    <strong class="font-semibold text-gray-900">providers</strong> section.
                </p>
                <p class="my-5 mx-0">Then use this code to start:</p>
                <pre class="overflow-x-auto py-3 px-5 my-6 mx-0 font-mono text-gray-300 whitespace-pre bg-gray-900 rounded-md"
                    style="line-height: 1.71429;"><code class="block overflow-x-auto p-0 font-normal text-gray-900 bg-transparent rounded-none" data-lang="php" style="content: &quot;&quot;;"><span class="text-xs text-blue-400"><span class="">&lt;?php</span></span>

<span class="text-xs text-purple-400"><span class="">namespace</span></span> <span class="text-xs text-blue-400"><span class="">App</span></span>\<span class="text-xs text-blue-400"><span class="">Providers</span></span>;

<span class="text-xs text-purple-400"><span class="">use</span></span> <span class="text-xs text-blue-400"><span class="">Illuminate</span></span>\<span class="text-xs text-blue-400"><span class="">Support</span></span>\<span class="text-xs text-blue-400"><span class="">Facades</span></span>\<span class="text-xs text-blue-400"><span class="">View</span></span>;
<span class="text-xs text-purple-400"><span class="">use</span></span> <span class="text-xs text-blue-400"><span class="">Illuminate</span></span>\<span class="text-xs text-blue-400"><span class="">Support</span></span>\<span class="text-xs text-blue-400"><span class="">ServiceProvider</span></span>;

<span class="text-xs"><span class="text-purple-400"><span class=""><span class="">class</span></span></span><span class=""> </span><span class="text-orange-300"><span class=""><span class="">ComposerServiceProvider</span></span></span><span class=""> </span><span class="text-purple-400"><span class=""><span class="">extends</span></span></span><span class=""> </span><span class="text-orange-300"><span class=""><span class="">ServiceProvider</span></span></span><span class="">
</span></span>{
    <span class="text-xs italic text-gray-700"><span class="italic">/**
     * Register bindings in the container.
     *
     * </span><span class="italic text-purple-400"><span class="italic"><span class="italic">@return</span></span></span><span class="italic"> void
     */</span></span>
    <span class="text-xs text-purple-400"><span class="">public</span></span> <span class="text-xs"><span class="text-purple-400"><span class=""><span class="">function</span></span></span><span class=""> </span><span class="text-blue-400"><span class=""><span class="">boot</span></span></span><span class=""><span class="">(<span class=""></span>)</span></span><span class="">: </span><span class="text-blue-400"><span class=""><span class="">void</span></span></span><span class="">
    </span></span>{
        View::composer(<span class="text-xs text-green-400"><span class="">'*'</span></span>, <span class="text-xs"><span class="text-purple-400"><span class=""><span class="">function</span></span></span><span class=""> </span><span class=""><span class="">(<span class=""><span class="text-orange-400">$view</span></span>)</span></span><span class=""> </span></span>{
            <span class="text-xs text-orange-400">$view</span>-&gt;with(<span class="text-xs text-green-400"><span class="">'logged_in_user'</span></span>, auth()-&gt;user());
        });
    }
}
</code></pre>
                <p class="my-5 mx-0">
                    This tells Laravel to bind a variable called
                    <strong class="font-semibold text-gray-900">$logged_in_user</strong> to
                    every view. Keep in mind, this means <em class="italic">any</em>,
                    including partials within master views. If you want to only bind to
                    specific views, you can specify an array of views using dot notation.
                </p>
                <p class="my-5 mx-0">So you can check it anywhere in any view:</p>
                <pre class="overflow-x-auto py-3 px-5 my-6 mx-0 font-mono text-gray-300 whitespace-pre bg-gray-900 rounded-md"
                    style="line-height: 1.71429;"><code class="block overflow-x-auto p-0 font-normal text-gray-900 bg-transparent rounded-none" data-lang="php" style="content: &quot;&quot;;">@<span class="text-xs text-purple-400"><span class="">if</span></span> (<span class="text-xs text-orange-400">$logged_in_user</span>)
    <span class="text-xs italic text-gray-700"><span class="italic">// User is logged in</span></span>
@<span class="text-xs text-purple-400"><span class="">else</span></span>
    <span class="text-xs italic text-gray-700"><span class="italic">// User is a guest</span></span>
@<span class="text-xs text-purple-400"><span class="">endif</span></span>
</code></pre>
                <p class="my-5 mx-0">
                    Now, it might seem trivial to replace some characters with nearly the
                    same amount, but if you needed to replace
                    <strong class="font-semibold text-gray-900">auth()-&gt;user()</strong>
                    with something else, you would only have to do it in one place.
                </p>
                <p class="my-5 mx-0">
                    As another example, you can
                    <a href="https://github.com/rappasoft/laravel-boilerplate/blob/master/app/Providers/ComposerServiceProvider.php#L26"
                        class="font-medium text-gray-900 underline cursor-pointer">see how I share announcements</a>
                    across views in my boilerplate application.
                </p>
            </div>

            <div class="flex justify-between mt-6">
                <div class="flex">
                    <span wire:id="DhclmVvmPghLG8chWB4R" class="inline-flex items-center text-sm leading-5">
                        <button wire:click="like"
                            class="inline-flex p-0 m-0 text-center text-gray-500 normal-case bg-transparent bg-none cursor-pointer focus:shadow-xs hover:text-gray-600"
                            style="font-size: 128%;">
                            <svg class="block w-5 h-5 align-middle" x-description="solid/thumb-up"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path
                                    d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"
                                    class=""></path>
                            </svg>

                            <span class="font-medium text-gray-900">4</span>
                            <span class="border-gray-300 border-solid sr-only box-border">likes</span>
                        </button>
                    </span>

                    <span class="inline-flex items-center text-sm leading-5">
                        <span class="inline-flex text-gray-500">
                            <svg class="block w-5 h-5 align-middle" x-description="solid/eye"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" class=""></path>
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd" class=""></path>
                            </svg>
                            <span class="font-medium text-gray-900">295</span>
                            <span class="border-gray-300 border-solid sr-only box-border">views</span>
                        </span>
                    </span>
                </div>

                <div class="flex z-50 flex-shrink-0 self-center">
                    <div x-data="{ open: false }" @keydown.escape.stop="open = false" @click.away="open = false"
                        class="inline-block relative text-left">
                        <div class="">
                            <button @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open"
                                class="inline-flex p-0 m-0 text-center text-gray-500 normal-case bg-transparent bg-none cursor-pointer hover:text-gray-600"
                                id="share-2" style="font-size: 128%;">
                                <span class="border-gray-300 border-solid sr-only box-border">Open options</span>
                                <svg class="block w-5 h-5 align-middle" x-description="solid/share"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path
                                        d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"
                                        class=""></path>
                                </svg>
                                <span class="text-sm font-medium leading-5 text-gray-900">Share</span>
                            </button>
                        </div>

                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="hidden absolute right-0 mt-2 w-56 bg-white rounded-md shadow-xs" role="menu"
                            aria-orientation="vertical" aria-labelledby="share-2"
                            style="display: none; transform-origin: right top;">
                            <div class="py-1" role="none">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Frappasoft.com%2Fblog%2Fsnippet-3-making-the-logged-in-user-available-to-all-views-using-view-composers&amp;t=Snippet 3: Making the logged in user available to all views using view composers"
                                    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                    class="flex py-2 px-4 text-sm leading-5 text-gray-800 cursor-pointer hover:bg-gray-200 hover:text-gray-900"
                                    role="menuitem" target="_blank">
                                    <svg class="block mr-3 w-5 h-5 text-gray-500 align-middle"
                                        x-description="solid/share" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"
                                            class=""></path>
                                    </svg>

                                    <span class="">Share to Facebook</span>
                                </a>

                                <a href="https://twitter.com/share?url=https%3A%2F%2Frappasoft.com%2Fblog%2Fsnippet-3-making-the-logged-in-user-available-to-all-views-using-view-composers&amp;via=Rppasoft&amp;text=Snippet 3: Making the logged in user available to all views using view composers"
                                    onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                    class="flex py-2 px-4 text-sm leading-5 text-gray-800 cursor-pointer hover:bg-gray-200 hover:text-gray-900"
                                    role="menuitem" target="_blank">
                                    <svg class="block mr-3 w-5 h-5 text-gray-500 align-middle"
                                        x-description="solid/share" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"
                                            class=""></path>
                                    </svg>

                                    <span class="">Share to Twitter</span>
                                </a>

                                <a href="http://www.reddit.com/submit?url=https%3A%2F%2Frappasoft.com%2Fblog%2Fsnippet-3-making-the-logged-in-user-available-to-all-views-using-view-composers&amp;title=Snippet+3%3A+Making+the+logged+in+user+available+to+all+views+using+view+composers"
                                    class="flex py-2 px-4 text-sm leading-5 text-gray-800 cursor-pointer hover:bg-gray-200 hover:text-gray-900"
                                    role="menuitem" target="_blank">
                                    <svg class="block mr-3 w-5 h-5 text-gray-500 align-middle"
                                        x-description="solid/share" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"
                                            class=""></path>
                                    </svg>

                                    <span class="">Share to Reddit</span>
                                </a>

                                <a x-data="{url: 'https://rappasoft.com/blog/snippet-3-making-the-logged-in-user-available-to-all-views-using-view-composers'}"
                                    @click.prevent="copyToClipboard(url);alert('Copied!');" href="#"
                                    class="flex py-2 px-4 text-sm leading-5 text-gray-800 cursor-pointer hover:bg-gray-200 hover:text-gray-900"
                                    role="menuitem">
                                    <svg class="block mr-3 w-5 h-5 text-gray-500 align-middle"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"
                                            class=""></path>
                                    </svg>

                                    <span class="">Copy Link</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
