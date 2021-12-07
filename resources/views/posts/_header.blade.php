<header class="max-w-4xl mx-auto mt-16 text-center">
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">Latest <span class="text-blue-500">From Scratch</span> News</h1>

        <div class="space-y-2 lg:space-y-0 lg:space-x-2 mt-4">

            <div class="relative bg-gray-300 lg:inline-flex rounded-xl">

                <x-category-dropdown />

            </div>

            <div class="relative bg-gray-300 flex lg:inline-flex items-center rounded-xl">
                    <select class="flex-1 bg-transparent appearence-none py-2 px-5 text-sm font-semibold">
                        <option value="category" disabled selected>Other Filters</option>
                        <option value="foo">Foo</option>
                        <option value="bar">Bar</option>
                    </select>
            </div>

            <div class="relative bg-gray-300 flex lg:inline-flex items-center rounded-xl py-2 px-5">
                <form action="/">
                    @if(request('category'))
                        <input type="hidden" name="category" value="request('category')">
                    @endif
                        <input type="text" class="bg-transparent placeholder-black focus-within:outline-none font-semibold text-sm" name="search" value="{{ request('search') }}" placeholder="Find something">
                </form>
            </div>
        </div>

    </div>

</header>
