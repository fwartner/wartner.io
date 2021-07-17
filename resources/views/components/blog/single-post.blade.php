<div>
    <figure>
        <img class="w-full rounded-lg" src="{{ $post->banner }}" alt="{{ $post->title }}">
    </figure>

    <div class="relative py-16 bg-white overflow-hidden">
        <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
            <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
                <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none"
                    viewBox="0 0 404 384">
                    <defs>
                        <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
                </svg>
                <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404"
                    height="384" fill="none" viewBox="0 0 404 384">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                </svg>
                <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none"
                    viewBox="0 0 404 384">
                    <defs>
                        <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
                </svg>
            </div>
        </div>
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="text-lg max-w-prose mx-auto">
                <h1>
                    <span
                        class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ $post->title }}</span>
                </h1>
            </div>
            <div class="mt-6 prose prose-indigo prose-lg text-gray-500 mx-auto">
                {!! $post->body !!}
            </div>
        </div>
    </div>

    <div
        class="py-16 px-4 mx-auto max-w-screen-xl leading-6 text-gray-900 lg:flex lg:justify-between lg:px-8 sm:px-6 sm:py-24">
        <div class="mx-auto mb-6 text-lg text-gray-600 lg:mb-0 lg:max-w-screen-xl"
            style="max-width: max-content; line-height: 1.77778;">
            <h1 class="mx-0 mt-0 mb-3 text-5xl font-extrabold leading-none">
                <span class="block text-base font-semibold tracking-wide text-indigo-600 uppercase"><time
                        datetime="{{ $post->created_at->format('Y-m-d') }}" class="uppercase">{{ $post->created_at->format('F j, Y') }}</time></span>
                <span class="block mt-2 text-3xl tracking-tight leading-8 sm:text-5xl sm:leading-none">{{ $post->title }}</span>
            </h1>

            <p class="my-5 mx-0 prose prose-indigo prose-lg leading-8">
                {!! $post->body !!}
            </p>
        </div>
    </div>
</div>
