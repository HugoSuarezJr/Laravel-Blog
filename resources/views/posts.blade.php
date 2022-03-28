<x-layout>
    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-16 space-y-4">
        @if ($posts->count())
        <x-post-grid :posts="$posts"/>

        @else
<<<<<<< HEAD
        <h2 class="text-center text-red-400">No posts yet. Please come back later for some excited news! Please come again! I dont love you</h2>
=======
        <h2 class="text-center text-red-400">No posts yet. Please come back later for some excited news! Please come again! I love you</h2>
>>>>>>> 1649b6532875f79f90510e64da0014c1f9ccf7c2
        @endif


    </main>


</x-layout>

