<x-panel>
    @auth
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/150?u={{ auth()->id() }}" alt="profile_pic" width="40" height="40"
                    class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5"
                    placeholder="Quick, think of something to say!" required></textarea>
                @error('body')
                <span class="text-xs text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-submit-button>Post</x-submit-button>
            </div>

        </form>
    @else
        <header class="text-center">
            <h1>
                Want to participate? <a href="/login" class="text-blue-500 hover:text-blue-400">Log in</a> or <a
                    href="/register" class="text-blue-500 hover:text-blue-400">Register</a> to comment!
            </h1>
        </header>
    @endauth
</x-panel>

