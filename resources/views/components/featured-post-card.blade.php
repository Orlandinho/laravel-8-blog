@props(['post'])

<article class="transition-colors duration-500 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img src="{{ asset('storage/' . ($post->thumbnail ? $post->thumbnail : 'thumbnails/illustration-1.png')) }}" alt="Illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between ml-4">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-6">
                    <h1 class="text-3xl">
                        <a href="/posts/{{$post->slug}}">{{ $post->title }}</a>
                    </h1>
                    <span class="text-gray-400 mt-2 block text-xs">Published <time>{{$post->created_at->diffForHumans()}}</time></span>
                </div>
            </header>

            <div class="text-sm space-y-4">
                {!! $post->excerpt !!}
            </div>

            <footer class="flex justify-between items-center mt-2">
                <div class="flex items-center text-sm">
                    <img src="/images/lary-avatar.svg" alt="lary avatar">

                    <div class="ml-4">
                        <h5 class="font-bold hover:text-blue-400">
                            <a href="/?author={{ $post->author->username }}">{{$post->author->name}}</a>
                        </h5>
                    </div>
                </div>

                <div>
                    <a href="/posts/{{$post->slug}}" class="rounded-full px-6 py-2 text-sm font-semibold bg-gray-300 hover:bg-gray-400">Read more</a>
                </div>
            </footer>
        </div>
    </div>
</article>
