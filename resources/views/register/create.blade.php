<x-layout>

    <section class="px-6 py-8">

        <main class="max-w-lg mx-auto mt-10 border border-gray-200 bg-gray-100 p-6 rounded-xl">

            <h1 class="text-center font-bold text-xl">Register!</h1>

            <form action="/register" method="POST" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase text-xs font-bold text-gray-700">name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="border border-gray-400 p-2 w-full">
                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase text-xs font-bold text-gray-700">username</label>
                    <input type="text" name="username" id="username" value="{{ old('username') }}" class="border border-gray-400 p-2 w-full">
                    @error('username')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase text-xs font-bold text-gray-700">email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="border border-gray-400 p-2 w-full">
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase text-xs font-bold text-gray-700">password</label>
                    <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full">
                    @error('password')
                    <p class="text-red-500 text-xs-m-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                </div>

            </form>

        </main>

    </section>

</x-layout>
