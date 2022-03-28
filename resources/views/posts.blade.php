<x-layout>
    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-16 space-y-4">
        @if ($posts->count())
        <x-post-grid :posts="$posts"/>

        @else
        <h2 class="text-center text-red-400">No posts yet. Please come back later for some excited news! Please come again! I love you</h2>
        @endif


    </main>


</x-layout>

