<!DOCTYPE html>
<title>Laravel form Scratch</title>
<link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
    html {
        scroll-behavior: smooth;
    }
    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracast logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-6 md:mt-0 flex items-center">
                @auth

                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }} !</button>
                    </x-slot>

                <x-dropdown-item href="/">All Posts</x-dropdown-item>
                {{--TODO: Why is this not active? --}}
                <x-dropdown-item href="/?author={{ auth()->user()->username }}" :active="request()->is('/?author={{ auth()->user()->username }}')">My Posts</x-dropdown-item>
                <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

                </x-dropdown>

                <form id="logout-form" method="POST" action="/logout" class="hidden">
                    @csrf
                </form>
                @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                <a href="/login" class="text-xs font-bold uppercase ml-4">Log In</a>
                @endauth

                <a href="#newsletter"
                    class="bg-blue-500 ml-3 px-4 py-2 rounded-full text-xs font-semibold text-white uppercase">Subscribe
                    for Updates</a>
            </div>
        </nav>

        {{ $slot }}

        <footer id="newsletter"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.png" alt="News letter icon" class="m-auto" style="width: 200px;">
            <h5 class="text-4xl">Stay in touch with the latest posts</h5>
            <p class="text-xl mt-4 lg:mt-0">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>
                            <div>
                                <input id='email'
                                    name="email"
                                    type="email"
                                    placeholder="Your email address"
                                    class="lg:bg-transparent pl-4 focus:outline-none">
                            @error('email')
                                <span class="text-xs text-red-400">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                        <button href="#"
                            class="bg-blue-500 mt-4 lg:mt-0 hover:bg-blue-600 lg:ml-3 px-8 py-3 rounded-full text-xs font-semibold text-white uppercase">Subscribe</button>
                    </form>
                </div>

            </div>
        </footer>

    </section>

    <x-flash />
</body>
