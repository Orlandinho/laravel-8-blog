<x-layout>

    @include('_posts_header')

    <main class="max-w-6xl mx-auto mt-8 lg:mt-16 space-y-4">

        @if ($posts->count())

            <x-posts-grid :posts="$posts" />

        @else

            <p class="text-center">There are no posts yet. Check this back later</p>

        @endif

    </main>

</x-layout>
