@if(session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         x-transition:enter.duration.500ms
         x-transition:leave.duration.400ms
         class="bg-blue-400 fixed bottom-3 right-3 py-2 px-4 text-white text-sm">
        <p>{{ session('success') }}</p>
    </div>
@endif
