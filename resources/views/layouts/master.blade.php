<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts/css/font-awesome.min.css') }}">
    <title>eshop Buja</title>
</head>

<body>

    <div x-data="searchbar">


        <div class="header-2">




            <nav class="bg-white py-2 md:py-4">
                <div class="container px-4 mx-auto md:flex md:items-center">

                    <div class="flex justify-between items-center">
                        <img src="{{ asset('images/eshop.png') }}" alt="log" height="90px" width="90px">

                        <button
                            class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden"
                            id="navbar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <div class="md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
                        <a href="/" class="p-2 lg:px-4 md:mx-2 text-white rounded bg-indigo-600">Accueil</a>
                        <a href="/products"
                            class="p-2 lg:px-4 md:mx-2 text-gray-800 rounded hover:bg-gray-400 hover:text-gray-700 transition-colors duration-300">Produits</a>


                        <a href="/cart"
                            class="p-2 lg:px-4 md:mx-2 text-gray-800 rounded hover:bg-gray-400 hover:text-gray-700 transition-colors duration-300"><img
                                src="{{ asset('images/panier3.png') }}" height="30px" width="30px" /></a><i class="text-green-100"></i>


                        <a href="#"
                            class="p-2 lg:px-4 md:mx-2 text-gray-800 rounded hover:bg-gray-400 hover:text-gray-700 transition-colors duration-300">Contact</a>

                            @if(url()->current() === "http://127.0.0.1:8000/products")

                            <a href="#" @click="show" class="p-2 lg:px-4 md:mx-2 text-white rounded bg-indigo-500"><i class="fa fa-search"></i></a>

                            @endif

                        @guest

                            <a href="{{ route('login') }}"
                                class="p-2 lg:px-4 md:mx-2 text-indigo-400 text-center border border-transparent rounded hover:bg-indigo-600 hover:text-white hover:text-white transition-colors duration-300">Se
                                Connecter</a>
                            <a href="{{ route('register') }}"
                                class="p-2 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">S'enregistrer</a>

                        @endguest

                        @auth

                        <div x-data="{ open: false }" class="ml-2 mb-0 relative">
                            <div class="relative inline-block" @click="open = !open">
                                <img class="inline-block object-cover w-12 h-12 rounded-full"
                                    src="{{ asset('storage/' . Auth::user()->image) }}" alt="Profile image" />
                                <span
                                    class="absolute bottom-0 right-0 inline-block w-3 h-3 bg-green-600 border-2 border-white rounded-full"></span>
                            </div>


                            <form action="{{ route('logout') }}" method="post" x-show="open" class="absolute">
                                @csrf

                                <button type="submit"
                                    class="p-1 lg:px-4 md:mx-2 text-indigo-600 text-center border border-solid border-indigo-600 rounded hover:bg-indigo-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Déconnexion</button>

                            </form>

                        </div>





                        @endauth

                    </div>
                </div>
            </nav>

            <div class="bg-indigo-100 py-6 md:py-12">

                @yield('content_After_navigation_section')

            </div>

        </div>

        @yield('search-bar')

        <main>

            @yield('content')


        </main>


        <footer class="text-gray-600 body-font bg-indigo-100">
            <div
                class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">

                        <img src="{{ asset('images/eshop.png') }}" alt="log" height="90px" width="90px">

                    </a>
                    <p class="mt-2 text-sm text-gray-500">Nous sommes à votre service 24h/24 et 7 jours/7.</p>
                </div>
                <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3 mr-4">GENERAL</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Accueil</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Services</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Activités</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Partenaires</a>
                            </li>
                        </nav>
                    </div>
                    <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">PARTICIPER ?</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-800"
                                    href="">S'enregister</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800" href="">Se
                                    Connecter</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-gray-800">Contact</a>
                            </li>

                        </nav>
                    </div>

                </div>
                <div class="bg-gray-100">
                    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                        <p class="text-gray-500 text-sm text-center sm:text-left">© 2021 Ehsop Buja
                            <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1"
                                target="_blank">@jehdailegrand</a>
                        </p>
                        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-3 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-3 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                            </a>
                            <a class="ml-3 text-gray-500">
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path stroke="none"
                                        d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                    </path>
                                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
        </footer>


    </div>



    <script src="{{ asset('js/jquery3.js') }}"></script>

    <script src="js/app.js"></script>

    <script>
        $('document').ready(function() {

            console.log('jquery loaded successfully');

            let toggleBtn = document.querySelector("#navbar-toggle");
            let collapse = document.querySelector("#navbar-collapse");

            toggleBtn.onclick = () => {
                collapse.classList.toggle("hidden");
                collapse.classList.toggle("flex");
            };



        });
    </script>
</body>

</html>
