<div>
    <figure>
        <img class="w-full rounded-lg" src="{{ $post->banner }}" alt="{{ $post->title }}">
    </figure>

    <div
        class="py-16 px-4 mx-auto max-w-screen-xl leading-6 text-gray-900 lg:flex lg:justify-between lg:px-8 sm:px-6 sm:py-24">
        <div class="mx-auto mb-6 text-lg text-gray-600 lg:mb-0 lg:max-w-screen-xl">
            <h1 class="mx-0 mt-0 mb-3 text-5xl font-extrabold leading-none">
                <span class="block text-base font-semibold tracking-wide text-gray-600 uppercase"><time
                        datetime="{{ $post->created_at->format('Y-m-d') }}" class="uppercase">{{ $post->created_at->format('F j, Y') }}</time></span>
                <span class="block mt-2 text-3xl tracking-tight leading-8 sm:text-5xl sm:leading-none">{{ $post->title }}</span>
            </h1>

            <p class="pt-5 my-5 mx-0 prose prose-indigo prose-lg">
                {!! $post->body !!}
            </p>
        </div>
    </div>
</div>
