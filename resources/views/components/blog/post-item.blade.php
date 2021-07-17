<div>
    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <a href="{{ route('blog.posts.show', $post->slug) }}" class="flex-shrink-0">
            <img class="h-48 w-full object-cover" src="{{ $post->banner }}" alt="{{ $post->title }}">
        </a>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
            <div class="flex-1">
                <div class="grid grid-cols-3 gap-4"">
                    <p class="m-0 text-sm font-medium leading-5 text-indigo-600">
                        <a href="">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                {{ $post->category->title }}
                            </span>

                        </a>
                    </p>
                </div>
                <a href="{{ route('blog.posts.show', $post->slug) }}" class="block mt-2">
                    <p class="text-xl font-semibold text-gray-900">
                        {{ $post->title }}
                    </p>
                    <p class="mt-3 text-base text-gray-500">
                        {!! $post->excerpt !!}
                    </p>
                </a>
            </div>
            <div class="mt-6 flex items-center">
                <div class="flex-shrink-0">
                    <a href="#">
                        <span class="sr-only">{{ $post->user->name }}</span>
                        <img class="h-10 w-10 rounded-full" src="{{ $post->user->profile_photo_url }}"
                            alt="{{ $post->user->name }}">
                    </a>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-gray-900">
                        <a href="#" class="hover:underline">
                            {{ $post->user->name }}
                        </a>
                    </p>
                    <div class="flex space-x-1 text-sm text-gray-500">
                        <time datetime="{{ $post->created_at->format('Y-m-d') }}">
                            {{ $post->created_at->format('F j, Y') }}
                        </time>
                        <span aria-hidden="true">
                            &middot;
                        </span>
                        <span>
                            {{ $post->reading_time }} read
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
