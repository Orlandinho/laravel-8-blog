<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel Blog</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

        <section class="px-6 py-8 font-openSans">

            <nav class="md:flex md:justify-between md:items-center">

                <div>
                    <a href="/">
                        <img src="/images/logo.svg" alt="Laracasts Logo" class="w-2/4">
                    </a>
                </div>

                <div class="mt-8 lg:mt-0">
                    <a href="/" class="text-xs font-bold">HOME PAGE</a>
                    <a href="#" class="bg-blue-500 ml-3 font-semibold rounded-full text-white text-xs py-3 px-5">SUBSCRIBE FOR UPDATES</a>
                </div>

            </nav>

            {{ $slot }}

            <footer class="py-16 px-10 mt-16 text-center flex-col justify-between items-center bg-gray-100 border border-black border-opacity-5 rounded-xl">
                <div>
                    <img src="/images/lary-newsletter-icon.svg" alt="lary-newsletter" class="mx-auto">
                    <h5 class="text-3xl">Stay in touch with the latest posts</h5>
                    <p class="text-sm">Promise to keep the inbox clean. No bugs</p>
                </div>

                <div class="mt-10">
                    <div class="relative inline-block mx-auto bg-gray-300 rounded-full">
                        <form action="#" method="post" class="flex text-sm">
                            <div class="inline-flex py-3 px-5 items-center">
                                <input type="text" placeholder="Your e-mail address" class="bg-transparent focus-within:outline-none">
                            </div>

                            <button type="submit" class="rounded-full hover:bg-blue-400 bg-blue-500 font-semibold text-white text-xs py-2 px-6">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>

            </footer>

        </section>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</html>
