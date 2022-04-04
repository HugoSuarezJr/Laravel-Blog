<x-layout>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-16 space-y-4">
        @if ($posts->count())
        <x-post-grid :posts="$posts"/>

        {{ $posts->links() }}
        @endif


    </main>


</x-layout>

