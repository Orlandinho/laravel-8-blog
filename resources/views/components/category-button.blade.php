@props(['category'])

<a href="/category/{{$category->slug}}" class="px-3 py-1 transition-colors duration-300 border border-blue-300 text-blue-300 hover:text-white hover:bg-blue-300 rounded-full text-xs uppercase font-semiblod">{{$category->name}}</a>
