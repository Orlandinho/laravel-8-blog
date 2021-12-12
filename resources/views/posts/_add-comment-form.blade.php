@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/150?u={{ auth()->id() }}" class="rounded-full"
                     style="height: 40px; width: 40px" alt="user-image">
                <h2 class="text-sm ml-4">Want to join the conversation?</h2>
            </header>

            <div class="mt-6">
                <textarea class="w-full border border-gray-200 focus:outline-none ring-1 ring-gray-200 focus:ring-gray-400 p-4 rounded-xl text-sm" name="body" required placeholder="Think of something to say" rows="5"></textarea>

                @error('body')
                <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <x-submit-button>Submit</x-submit-button>

        </form>
    </x-panel>
@else
    <p class="mb-8 text-sm"><a href="/register" class="text-blue-400">Register</a> or <a href="/login" class="text-blue-400">Log in</a> to leave a comment</p>
@endauth
