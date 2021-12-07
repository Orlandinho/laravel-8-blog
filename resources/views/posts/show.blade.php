<x-layout>

    <main class="max-w-6xl mx-auto mt-6 lg:mt-16 space-y-6">

        <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10 pt-10">

            <div class="col-span-4 text-center">
                <img src="/images/illustration-1.png" alt="Illustration" class="rounded-xl">

                <p class="text-gray-400 mt-4 block text-xs">
                    Published
                    <time>{{$post->created_at->diffForHumans()}}</time>
                </p>

                <div class="flex items-center justify-center text-sm mt-4">

                    <img src="/images/lary-avatar.svg" alt="Lary avatar">

                    <h5 class="font-bold ml-3 text-left hover:text-blue-400">
                        <a href="/?author={{ $post->author->username }}">{{$post->author->name}}</a>
                    </h5>

                </div>
            </div>

            <div class="col-span-8 -mt-10">

                <div class="flex justify-between mb-8 text-lg">
                    <div>
                        <a href="/" class="text-sm text-blue-400"><i class="fas fa-long-arrow-alt-left mr-2"></i>Back to
                            posts</a>
                    </div>

                    <div class="space-x-2">
                        <x-category-button :category="$post->category"/>
                    </div>
                </div>

                <h1 class="font-bold text-4xl mb-10">{{$post->title}}</h1>

                <div class="space-y-6">

                    {!! $post->body !!}

                </div>

            </div>
            {{--     coments section       --}}
            <section class="col-span-8 col-start-5 mt-10">

                <article class="flex bg-gray-100 p-4 border border-gray-200 rounded-xl space-y-4 space-x-4">

                    <x-post-comment />
                    <x-post-comment />
                    <x-post-comment />

                </article>
            </section>

        </article>

    </main>

</x-layout>
