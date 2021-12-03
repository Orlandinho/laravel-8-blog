<x-layout>

    @include('_posts_header')

    <main class="max-w-6xl mx-auto mt-8 lg:mt-16 space-y-4">

        <x-featured-post-card/>

        <div class="lg:grid lg:grid-cols-2">

            <x-medium-post-card/>
            <x-medium-post-card/>

        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>
    </main>

</x-layout>
