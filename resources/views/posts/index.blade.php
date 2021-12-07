<x-layout>

    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-8 lg:mt-16 space-y-4">

        @if($posts->count())

            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @elseif(!$posts->count() && request('search') === ''||NULL)

            <p class="text-center">There are no posts yet.</p>

        @else

            <p class="text-center">There are no posts that matches <span class="font-semibold">{{ request('search') }}</span>.</p>

        @endif

    </main>

</x-layout>
