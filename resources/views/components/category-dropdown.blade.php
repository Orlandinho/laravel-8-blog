<x-dropdown>

    <x-slot name="trigger">

        <button class="py-2 pl-3 pr-9 text-sm font-semibold flex lg:w-32 text-left lg:inline-flex"> {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }} </button>

    </x-slot>

    <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

    @foreach($categories as $category)
        <x-dropdown-item href="/?category={{ $category->slug }}" :active="request()->is('/?category=' . $category->slug)">{{ $category->name }}</x-dropdown-item>
    @endforeach

</x-dropdown>
