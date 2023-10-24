<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Loja Virtual</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="">
    <nav class="flex items-center bg-blue-600">
        <div class="flex items-center justify-center p-2 m-1">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                alt="Your Company">
        </div>

        <div class="flex items-center m-1 md:hidden">
            <button class=" p-2 rounded text-white hover:bg-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

            </button>
        </div>

        <div class="m-1">
            <div class="flex flex-col md:flex-row">
                <a href=""
                    class="font-semibold text-white p-1 m-1 hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Principal</a>

                <a href=""
                    class="font-semibold text-white p-1 m-1 hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Catalogo</a>

                <a href=""
                    class="font-semibold text-white p-1 m-1 hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sobre
                    Nós</a>
            </div>

            <div>
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-4 text-right z-10">
                        @auth
                            <a href="{{ route('painel.dashboard') }}"
                                class="font-semibold text-white hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-white hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-white hover:text-gray-300 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>

    <section class="bg-gray-100">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
            <div class="flex flex-col justify-center">
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                    Sua Loja Virtual</h1>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non error eligendi nemo quisquam fugit ipsa
                    nobis eum eveniet, tempora placeat sunt </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Criar Seu Pedido
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="#"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
