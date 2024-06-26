@props(['post'])

<article class="translation-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-5 px-4 lg:flex">
    <div class="flex-1 lg:mr-8">
        {{-- TODO  --}}
        <img src="http://loremflickr.com/640/480/business" alt="Blog post illustration" class="rounded-xl">
    </div>

    <div class="flex flex-1 flex-col justify-between">
        <header class="mt-8 lg:mt-0">
            <div class="space-x-2">
                <x-category-button :category="$post->category" />
            </div>

            <div class="mt-4">
                <h1 class="text-3xl">
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>
                <span class="mt-2 block text-gray-500 text-xs">
                    Published <time>{{ $post->created_at->diffForHumans() }}</time>
                </span>
            </div>
        </header>

        <div class="text-sm mt-2 space-y-4">
                {!! $post->excerpt !!}
        </div>

        <footer class="flex justify-between items-center mt-8">
            <div class="flex items-center text-sm">
                <img src="/images/lary-avatar.svg" alt="Lary avatar">
                <div class="ml-3">
                    <x-author-name :author="$post->author"/>
                </div>
            </div>

            <div class="hidden lg:block">
                <a href="/posts/{{ $post->slug }}" class="text-xs font-semibold hover:bg-gray-400 bg-gray-300 rounded-full  py-2 px-8">Read More</a>
            </div>
        </footer>

    </div>
</div>
</article>
