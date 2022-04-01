@props(['post'])
<article {{ $attributes->merge(['class' => 'translation-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'])}}>
    <div class="py-5 px-4">
        <div>
            <img src="/images/illustration-3.png" alt="Blog post illustration" class="rounded-xl">
        </div>

        <div class="mt-5 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <a href="/posts/{{ $post->slug }}">
                        <h1 class="text-3xl">{{ $post->title }}</h1>
                    </a>
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
                        <h5 class="font-bold">{{ $post->author->name }}</h5>
                        <h6>Mascot at Laracast</h6>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{ $post->slug }}" class="hidden lg:block text-xs font-semibold bg-gray-300 rounded-full  py-2 px-8">Read More</a>
                </div>
            </footer>

        </div>
    </div>
</article>
