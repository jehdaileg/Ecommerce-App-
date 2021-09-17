@extends('layouts.master')

@section('content_After_navigation_section')


<!-- Section 1 -->
<section class="w-full px-8 py-16 bg-gray-100 xl:px-8">
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col items-center md:flex-row">

            <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                <p class="font-medium text-blue-500 uppercase">
                    <img src="{{ asset('images/eshop.png') }}" height="90px" width="90px" alt="logo">
                </p>
                <h5 class="text-xl font-extrabold leading-none text-black sm:text-xl md:text-4xl">
                    Expérimenter l'une de plus grandes plateformes du commerce électronique.
                </h5>
                <p class="text-xl text-gray-600 md:pr-16">Veuillez vous connecter pour voir nos récents produits pour acheter.</p>
            </div>

            <div class="w-full mt-16 md:mt-0 md:w-2/5">
                <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                    <h3 class="mb-6 text-2xl font-medium text-center">Connexion</h3>

                    @if(session('status'))

                        <div class="bg-red-400 rounded-md mb-2 text-center text-white p-2">{{ session('status') }}</div>

                    @endif

                    <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="email" name="email" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Email address">
                        <input type="password" name="password" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Password">
                        <div class="block">
                           <button class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg">Se Connecter</button>
                        </div>
                    </form>

                    <p class="w-full mt-4 text-sm text-center text-gray-500">Vous n'avez pas de compte? <a href="{{ route('register') }}" class="text-blue-500 underline">Créer un compte</a></p>
                </div>
            </div>

        </div>
    </div>
</section>


@stop
