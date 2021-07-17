@section('page_title', 'Blog Posts')

    <x-guest-layout>
        <div class="md:flex md:items-center bg-gray-700">
            <div class="pb-5 pt-5 flex-1 min-w-0 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold leading-7 text-white sm:text-3xl sm:truncate">
                    /dev/Blog/
                </h2>
            </div>
        </div>
        <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
            <div class="absolute inset-0">
                <div class="bg-white h-1/3 sm:h-2/3"></div>
            </div>
            <div class="relative max-w-7xl mx-auto">
                <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                    @foreach ($posts as $post)
                        <x-blog.post-item :post="$post" />
                    @endforeach
                </div>
                <div class="pt-5">
                    {!! $posts->links() !!}
                </div>
            </div>
        </div>

        @livewire('newsletter.form-semi-bold')
    </x-guest-layout>
