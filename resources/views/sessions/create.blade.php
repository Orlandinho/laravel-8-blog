<x-layout>

    <section class="px-6 py-8">

        <main class="max-w-lg mx-auto mt-10">

            <x-panel class="bg-gray-100">

                <h1 class="text-center font-bold text-xl">Log In!</h1>

                <form action="/login" method="POST" class="mt-10">
                    @csrf

                    <x-form.input name="email" type="email"/>

                    <x-form.input name="password" type="password"/>

                    <x-submit-button>Submit</x-submit-button>

                </form>

            </x-panel>

        </main>

    </section>

</x-layout>
