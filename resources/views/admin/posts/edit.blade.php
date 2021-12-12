<x-layout>

    <x-setting :heading="'Edit Post:  ' . $post->title" >

        <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name='title' :value="old('title', $post->title)" />

            <x-form.input name='slug' :value="old('slug', $post->slug)" />

            <div class="mt-6 flex">
                <div class="flex-1">
                    <x-form.input name='thumbnail' type='file' :value="old('thumbnail', $post->thumbnail)"/>
                </div>

                <img src="{{ asset('storage/' . ($post->thumbnail ? $post->thumbnail : 'thumbnails/illustration-1.png')) }}" alt="current-image" class="rounded-xl ml-6" style="width: 100px;">
            </div>


            <x-form.textarea name='excerpt'> {{ old('excerpt', $post->excerpt) }} </x-form.textarea>

            <x-form.textarea name='body'> {{ old('body', $post->body) }} </x-form.textarea>

            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category_id" class="border border-gray-300 focus:outline-none ring-1 ring-gray-200 focus:ring-gray-400 rounded-xl py-0.5 pl-2 text-sm w-3/12">

                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach

                </select>

                <x-form.error name='category' />
            </x-form.field>

            <x-submit-button>Update Post</x-submit-button>
        </form>

    </x-setting>

</x-layout>
