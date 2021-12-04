<x-layout>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-16 space-y-6">

        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10 pt-10">

            <div class="col-span-4 text-center">
                <img src="/images/illustration-1.png" alt="Illustration" class="rounded-xl">

                <p class="text-gray-400 mt-4 block text-xs">
                    Published <time>{{$post->created_at->diffForHumans()}}</time>
                </p>

                <div class="flex items-center justify-center text-sm mt-4">
                    <img src="/images/lary-avatar.svg" alt="Lary avatar">

                    <div class="ml-3 text-left">
                        <h5 class="font-bold">{{$post->author->name}}</h5>
                    </div>
                </div>
            </div>

            <div class="col-span-8 -mt-10">

                <div class="flex justify-between mb-8 text-lg">
                    <div>
                        <a href="/">Back to posts</a>
                    </div>

                    <div class="space-x-2">
                        <x-category-button :category="$post->category" />
                    </div>
                </div>

                <h1 class="font-bold text-4xl mb-10">{{$post->title}}</h1>

                <div class="space-y-6">

                    {{$post->body}}

                </div>
            </div>
        </article>

    </main>

</x-layout>
