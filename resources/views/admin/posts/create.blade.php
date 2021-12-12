<x-layout>

    <x-setting heading="Publish New Post">

        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf

            <x-form.input name='title' />

            <x-form.input name='slug' />

            <x-form.input name='thumbnail' type='file' />

            <x-form.textarea name='excerpt' />

            <x-form.textarea name='body' />

            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category_id" class="border border-gray-300 focus:outline-none ring-1 ring-gray-200 focus:ring-gray-400 rounded-xl py-0.5 pl-2 text-sm w-3/12">

                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach

                </select>

                <x-form.error name='category' />
            </x-form.field>

            <x-submit-button>Publish</x-submit-button>
        </form>

    </x-setting>

</x-layout>
