@section('page_title', 'Blog Posts')

    <x-guest-layout>
        <div class="pb-5 pt-5 flex-1 min-w-0 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
                <div class="absolute inset-0">
                    <div class="bg-white h-1/3 sm:h-2/3"></div>
                </div>
                <div class="relative max-w-7xl mx-auto">
                    <div class="text-center">
                        <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                            From the blog
                        </h2>
                    </div>

                    <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                        @foreach ($posts as $post)
                            <x-blog.post-item :post="$post" />
                        @endforeach
                    </div>
                </div>

                <div class="pt-5">
                    {!! $posts->links() !!}
                </div>
            </div>

            @livewire('newsletter.form-semi-bold')
        </div>
    </x-guest-layout>
