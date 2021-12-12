@props(['name'])

<div class="mb-6">
    <x-form.label name='{{ $name }}' />
    <input name="{{ $name }}" id="{{ $name }}" {{ $attributes([ 'value' => old($name)]) }} class="border border-gray-300 p-2 w-full focus:outline-none ring-1 ring-gray-200 focus:ring-gray-400 rounded-xl text-sm">
    <x-form.error name='{{ $name }}' />
</div>
