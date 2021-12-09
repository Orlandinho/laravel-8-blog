@props(['comment'])

<x-panel class="bg-gray-100">
    <article class="flex space-4 space-x-4">

        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/150?u={{ $comment->author->id }}" alt="avatar" width="60" height="60"
                 class="rounded-xl">
        </div>

        <div>
            <header>
                <h3 class="font-semibold">{{ $comment->author->username }}</h3>
                <p class="text-xs mt-2">Posted
                    <time>{{ $comment->created_at->format("F j, Y \a\\t g:i a") }}</time>
                </p>
            </header>
            <p class="text-sm mt-2">{{ $comment->body }}</p>
        </div>

    </article>
</x-panel>
