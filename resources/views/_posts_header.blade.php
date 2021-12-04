<header class="max-w-4xl mx-auto mt-16 text-center">
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">Latest <span class="text-blue-500">From Scratch</span> News</h1>
        <h2 class="inline-flex mt-2">By Lary Laracore <img src="/images/lary-head.svg" class="ml-2"> </h2>
        <p class="mt-14 text-sm">Another year, another update. We're refreshing the popular Laravel series with new content. I'm going to keep you guys up to speed with what's going on.</p>

        <div class="space-y-2 lg:space-y-0 lg:space-x-2 mt-6">

            <div class="relative bg-gray-300 lg:inline-flex rounded-xl">

                <div x-data="{show: false}" @click.away = "show = false">

                    <button @click="show = ! show" class="py-2 pl-3 pr-9 text-sm font-semibold flex lg:w-32 text-left lg:inline-flex">
                        {{ isset($currentCategory)? $currentCategory->name : 'Categories' }}</button>

                    <div x-show="show" class="py-2 absolute rounded-xl bg-gray-300 w-full mt-2 z-50" style="display: none">
                        @foreach($categories as $category)
                            <a href="/category/{{$category->slug}}" class="block text-left px-3 text-sm hover:bg-gray-400">{{$category->name}}</a>
                        @endforeach
                    </div>

                </div>

            </div>

            <div class="relative bg-gray-300 flex lg:inline-flex items-center rounded-xl">
                    <select class="flex-1 bg-transparent appearence-none py-2 px-5 text-sm font-semibold">
                        <option value="category" disabled selected>Other Filters</option>
                        <option value="foo">Foo</option>
                        <option value="bar">Bar</option>
                    </select>
            </div>

            <div class="relative bg-gray-300 flex lg:inline-flex items-center rounded-xl py-2 px-5">
                <form>
                        <input type="text" class="bg-transparent placeholder-black focus-within:outline-none font-semibold text-sm" name="search" placeholder="Find something">
                </form>
            </div>
        </div>

    </div>

</header>
