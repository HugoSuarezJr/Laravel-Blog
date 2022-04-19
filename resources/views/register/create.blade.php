<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register!</h1>
                <form action="/register" method="POST" class="mt-10">
                    @csrf

                    <x-form.input name="name" autocomplete="name"/>
                    <x-form.input name="username" autocomplete="username"/>
                    <x-form.input name="email" autocomplete="email" type="email"/>
                    <x-form.input name="password" autocomplete="new-password" type="password"/>
                    <x-form.button>Submit</x-form.button>
                    {{-- Add list of errors to bottom of page --}}
                    {{-- @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500 text-xs">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif --}}
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
