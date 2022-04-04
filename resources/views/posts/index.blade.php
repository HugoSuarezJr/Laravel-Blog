<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-16 space-y-4">
        @if ($posts->count())
        <x-post-grid :posts="$posts"/>

        @else
        <h1 class="text-center">
            No posts yet. Please come back later for some exciting news!
        </h1>
        @endif


    </main>


</x-layout>

