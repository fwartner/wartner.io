@section('page_title', $post->title)

    <x-guest-layout>
        <div class="pb-5 pt-5 flex-1 min-w-0 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-blog.single-post :post="$post" />

            @livewire('newsletter.form-semi-bold')
        </div>
    </x-guest-layout>
