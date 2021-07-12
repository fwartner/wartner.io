<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex items-center flex-shrink-0">
                    <a href="/">
                        <x-jet-application-mark class="block w-auto h-9" />
                    </a>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="/" :active="request()->path() == '/'">
                        {{ __('Home') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{ route('blog.posts') }}" :active="request()->routeIs('blog.posts.*')">
                        {{ __('Blog') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="/about" :active="request()->path() == 'about'">
                        {{ __('About') }}
                    </x-jet-nav-link>

                    <x-jet-nav-link href="https://load-podcast.com">
                        {{ __('Podcast') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <div class="flex items-center -mr-2 sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="/" :active="request()->path() == '/'">
                {{ __('Home') }}
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="{{ route('blog.posts') }}" :active="request()->routeIs('blog.posts.*')">
                {{ __('Blog') }}
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="/about" :active="request()->path() == 'about'">
                {{ __('About') }}
            </x-jet-responsive-nav-link>

            <x-jet-responsive-nav-link href="https://load-podcast.com">
                {{ __('Podcast') }}
            </x-jet-responsive-nav-link>
        </div>
    </div>
</nav>
