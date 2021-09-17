@extends('layouts.master')

@section('content')


@section('content_After_navigation_section')


<h1 class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-4xl"><span class="inline md:block">Bienvenue à notre site officiel.</span> <span class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 to-indigo-500 md:inline-block">Faire l'expérience.</span></h1>
<div class="mx-auto mt-5 text-gray-800 md:mt-12 md:max-w-lg md:text-center lg:text-lg"> Nous assurons la satisfaction de nos clients dans l'achat et la vente des produits et des services en toute sécurité. Nous espérons que vous appréciez nos services. </div>
<div class="flex flex-col items-center mt-12 text-center">
    <span class="relative inline-flex w-full md:w-auto">
        <a href="" type="button" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-indigo-600 border border-transparent md:w-auto hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 rounded-full">
            Acheter
        </a>

    </span>
    <a href="#" class="mt-3 text-sm text-indigo-600">Voir plus...</a>
</div>


@endsection

<div class="container px-4 mx-auto">


    <div class="about_services">

      <section class="text-gray-600 body-font">
<div class="container px-5 py-24 mx-auto">
  <div class="flex flex-wrap w-full mb-20">
    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Services</h1>
      <div class="h-1 px-1 py-1 w-20 bg-indigo-500 rounded"></div>
    </div>
    <p class="lg:w-1/2 w-full leading-relaxed text-gray-800">Nous vous garantissons d'excellents services dans un délais souhaité avec des équipes expérimentées.Nous faisons également le suivi pour chaque service rendu.</p>
  </div>
  <div class="flex flex-wrap -m-4">
    <div class="xl:w-1/4 md:w-1/2 p-4">
      <div class="bg-gray-100 p-6 rounded-lg">
        <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('images/purchase.jpg') }}" alt="content">
        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Products's purchase</h3>
        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">ACHAT DES PRODUITS</h2>
        <p class="leading-relaxed text-base text-gray-800">Nous offrons des services d'achat en ligne des produits de différentes catégories comme la technologie, le vestimentaire et l'alimentaire.</p>
      </div>
    </div>
    <div class="xl:w-1/4 md:w-1/2 p-4">
      <div class="bg-gray-100 p-6 rounded-lg">
        <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('images/sale.jpg') }}" alt="content">
        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Sale</h3>
        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">VENTE DES PRODUITS</h2>
        <p class="leading-relaxed text-base text-gray-800">Nous donnons également la possibilité à nos clients (entreprises ou particuliers) de vendre leurs produits par le bias de notre plateforme.</p>
      </div>
    </div>
    <div class="xl:w-1/4 md:w-1/2 p-4">
      <div class="bg-gray-100 p-6 rounded-lg">
        <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('images/elearning.jpg') }}" alt="content">
        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">e-learning</h3>
        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">E-LEARNING</h2>
        <p class="leading-relaxed text-base text-gray-800">Nous oofrons également des formations en ligne dans le domaine du e-commerce et tout ce qui concerne le traffic économique en ligne.</p>
      </div>
    </div>
    <div class="xl:w-1/4 md:w-1/2 p-4">
      <div class="bg-gray-100 p-6 rounded-lg">
        <img class="h-40 rounded w-full object-cover object-center mb-6" src="{{ asset('images/delivery.jpg') }}" alt="content">
        <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">delivery</h3>
        <h2 class="text-lg text-gray-900 font-medium title-font mb-4">LIVRAISON A DOMICILE</h2>
        <p class="leading-relaxed text-base text-gray-800">Pour vos différentes commandes ou transactions éffectuées, nous vous offrons des services traiteurs pour la livraison et le suivi des vos opérations.</p>
      </div>
    </div>
  </div>
</div>
</section>


<section class="flex items-center justify-center py-20 bg-white min-w-screen">
    <div class="px-16 bg-white">
        <div class="container flex flex-col items-start mx-auto lg:items-center">
            <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider text-purple-500 uppercase lg:justify-center lg:items-center">eshop ? Les Gens en parlent déjà...</p>


            <h2 class="relative flex items-start justify-start w-full max-w-3xl text-2xl font-bold lg:justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                </path>
            </svg>
                Ce qu'on dit de notre communauté ...</h2>
                <div class="block w-full h-0.5 max-w-lg mt-6 bg-purple-100 rounded-full"></div>

            <div class="items-center justify-center w-full mt-12 mb-4 lg:flex">
                <div class="flex flex-col items-start justify-start w-full h-auto mb-12 lg:w-1/3 lg:mb-0">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                            <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1700&amp;q=80" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-gray-800">John Doe</h4>
                            <p class="text-gray-600">CEO of Something</p>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-800">"Etant dans le besoin urgent de payer un Mac book pro à bon prix, un ami m'a recommandé eshop, et j'ai eu mon produit en moins de 48H."</blockquote>
                </div>
                <div class="flex flex-col items-start justify-start w-full h-auto px-0 mx-0 mb-12 border-l border-r border-transparent lg:w-1/3 lg:mb-0 lg:px-8 lg:mx-8 lg:border-gray-200">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                            <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2547&amp;q=80" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-gray-800">Jane Doe</h4>
                            <p class="text-gray-600">CTO of Business</p>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-800">"Merci beaucoup eshop car vous rendez ma vie facile du jour au jour."</blockquote>
                </div>
                <div class="flex flex-col items-start justify-start w-full h-auto lg:w-1/3">
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                            <img src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1256&amp;q=80" class="object-cover w-full h-full">
                        </div>
                        <div class="flex flex-col items-start justify-center">
                            <h4 class="font-bold text-gray-800">John Smith</h4>
                            <p class="text-gray-600">Creator of Stuff</p>
                        </div>
                    </div>
                    <blockquote class="mt-8 text-lg text-gray-800">"Que ce soient les burundais ou autres étrangers au Burundi, rejoignez vite eshop pour des services rapides et efficaces avec des personnes expérimentées et formidables...Merci beaucoup"</blockquote>
                </div>
            </div>
        </div>
    </div>
</section>







<section class="relative py-20 overflow-hidden bg-white">
    <span class="absolute top-0 right-0 flex flex-col items-end mt-0 -mr-16 opacity-60">
        <span class="container hidden w-screen h-32 max-w-xs mt-20 transform rounded-full rounded-r-none md:block md:max-w-xs lg:max-w-lg 2xl:max-w-3xl bg-blue-50"></span>
    </span>

    <span class="absolute bottom-0 left-0"> </span>

    <div class="relative px-16 mx-auto max-w-7xl">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Notre équipe</h1>
      <div class="h-1 px-1 py-1 w-20 bg-indigo-500 rounded"></div>
        <h4 class="relative max-w-lg mt-5 mb-10 text-1xl font-semibold leading-tight lg:text-5xl">Une équipe expérimentée avec des personnes formidables</h4>
        <div class="grid w-full grid-cols-2 gap-10 sm:grid-cols-3 lg:grid-cols-4">
            <div class="flex flex-col items-center justify-center col-span-1">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-blue-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="https://cdn.devdojo.com/images/june2021/avt-03.jpg">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Freddy Smith</h3>
                        <p class="text-blue-600">PDG et Fondateur de eshop</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center col-span-1">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="{{ asset('images/chris.jpg') }}">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Christophe Tabaro</h3>
                        <p class="text-blue-600">Chef Technique</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center col-span-1">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-pink-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="{{ asset('images/laeti.jpg') }}">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Laetitia Mozi</h3>
                        <p class="text-blue-600">Directrice de Design et Marketing</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center col-span-1">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="{{ asset('images/jehdai.png') }}">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Jehdai Bugale</h3>
                        <p class="text-blue-600">Technicien Développeur (IT)</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center col-span-1">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="https://cdn.devdojo.com/images/june2021/avt-14.jpg">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Ron Jenson</h3>
                        <p class="text-blue-600">Chef Equipe de Livraison</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center col-span-1">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-pink-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="https://cdn.devdojo.com/images/june2021/avt-13.jpg">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Pete Tompkins</h3>
                        <p class="text-blue-600">Chef Service E-Learning</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center col-span-1">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-green-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="https://cdn.devdojo.com/images/june2021/avt-16.jpg">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Kelly Richards</h3>
                        <p class="text-blue-600">Directrice des Ventes</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center col-span-1">
                <div class="relative p-5">
                    <div class="absolute z-10 w-full h-full -mt-5 -ml-5 rounded-full rounded-tr-none bg-blue-50"></div>
                    <img class="relative z-20 w-full rounded-full" src="https://cdn.devdojo.com/images/june2021/avt-08.jpg">
                </div>
                <div class="mt-3 space-y-2 text-center">
                    <div class="space-y-1 text-lg font-medium leading-6">
                        <h3>Alexis Jordan</h3>
                        <p class="text-blue-600">Membre Equipe livraison</p>
                    </div>
                    <div class="relative flex items-center justify-center space-x-3">
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#_" class="text-gray-300 hover:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>




  <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
      <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
          <div class="lg:w-1/2 px-6">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESSE</h2>
            <p class="mt-1 text-gray-700">Burundi/Bujumbura, Centre ville, Av de La Mission, Galerie Salama, Numero 13</p>
          </div>
          <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
            <a class="text-gray-700 leading-relaxed">eshop@gmail.com</a>
            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
            <p class="leading-relaxed text-gray-700">+257 68-08-79-52</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Nous laisser un message ici...</p>
        <div class="relative mb-4">
          <label for="name" class="leading-7 text-sm text-gray-600">Nom</label>
          <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
          <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
          <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Envoyer</button>
        <p class="text-xs text-gray-500 mt-3">Laissez-nous un message pour une préoccupation particulière ou une suggestion.</p>
      </div>
    </div>
  </section>







@stop
