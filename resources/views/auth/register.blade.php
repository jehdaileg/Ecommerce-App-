@extends('layouts.master')

@section('content_After_navigation_section')


<!-- Section 1 -->
<section class="w-full bg-white">

    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col lg:flex-row">
            <div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 bg-gradient-to-r from-white via-white to-gray-100">
                <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                    <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                        <div class="relative">
                            <p class="mb-2 font-medium text-gray-700 uppercase">Trouver un produit ou un service.</p>
                            <h2 class="text-5xl font-bold text-gray-900 xl:text-5xl">En moins de temps, nous répondons aux besoins de nos utilisateurs</h2>
                        </div>
                        <p class="text-2xl text-gray-700">Nous faisons de notre mieux de répondre favorablement aux besoins de nos clients en peu de temps et à moindres coûts.Rejoignez-nous maintenant.</p>
                        <a href="{{ route('login') }}" class="inline-block px-8 py-5 text-xl font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">Commencez-maintenant</a>
                    </div>
                </div>
            </div>

            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">
                <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    <h4 class="w-full text-3xl font-bold">Créer Votre Compte</h4>
                    <p class="text-lg text-gray-500">Si vous avez un compte, connectez-vous <a href="{{ route('login') }}" class="text-blue-600 underline">Connexion</a></p>
                    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="relative w-full mt-10 space-y-8">

                            <div class="relative">
                                <label class="font-medium text-gray-900">Nom:</label>
                                <input type="text" name="nom" class="block w-full px-2 py-2 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50 @error('nom') border-red-500 @enderror" placeholder="Entrer votre nom..." value="{{ old('nom') }}">
                                @error('nom')

                                <div class="text-red-500"> {{ $message }} </div>

                                @enderror
                            <div class="relative">
                                <label class="font-medium text-gray-900">Prenom:</label>
                                <input type="text" name="prenom" class="block @error('prenom') border-red-500 @enderror w-full px-2 py-2 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" placeholder="Entrer Votre prenom..." value="{{ old('prenom') }}">
                                @error('prenom')
                                <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="relative">
                                <label class="font-medium text-gray-900">Email:</label>
                                <input type="email" name="email" class="block @error('email') border-red-500 @enderror w-full px-2 py-2 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" placeholder="Entrer votre adresse mail..." value="{{ old('email') }}">
                                @error('email')
                                <div class="text-red-500">

                                    {{ $message }}

                                </div>
                                @enderror
                            </div>


                            <div class="relative">
                                <label class="font-medium text-gray-900">Mot de passe:</label>
                                <input type="password" name="password" class="block @error('password') border-red-500  @enderror w-full px-2 py-2 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" placeholder="Entrer votre mot de passe..." value="{{ old('password') }}">

                                @error('password')
                                    <div class="text-red-500">

                                        {{ $message }}

                                    </div>
                                @enderror
                            </div>


                            <div class="relative">
                                <label class="font-medium text-gray-900">Confirmer votre mot de passe:</label>
                                <input type="password" name="password_confirmation" class="block  @error('password_confirmation') border-red-500 @enderror  w-full px-2 py-2 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" placeholder="Confirmer votre mot de passe..." value="{{ old('password_confirmation') }}">

                                @error('password_confirmation')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="relative">
                                <label class="font-medium text-gray-900">Phone:</label>
                                <input type="phone" name="phone" class=" @error('phone') border-red-500 @enderror block w-full px-2 py-2 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" placeholder="Entrer votre numéro de téléphone..." value="{{ old('phone') }}">

                                @error('phone')

                                <div class="text-red-500">

                                    {{ $message }}

                                </div>
                                @enderror
                            </div>


                            <div class="relative">
                                <label class="font-medium text-gray-900">Localisation:</label>

                                <select name="localisation" class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg  focus:shadow-outline">
                                    <optgroup label="BURUNDI">
                                        <option value="bujumbura">Bujumbura</option>
                                        <option value="gitega">Gitega</option>
                                        <option value="ngozi">Ngozi</option>
                                        <option value="rumonge">Rumonge</option>
                                        <option value="cibitoke">Cibitoke</option>
                                    </optgroup>

                                    <optgroup label="CONGO RDC">
                                        <option value="nord kivu">Goma</option>
                                        <option value="bukavu">Bukavu</option>
                                        <option value="kinshasa">kinshasa</option>
                                        <option value="lubumbashi">Lubumbashi</option>

                                    </optgroup>

                                    <optgroup label="RWANDA">
                                        <option value="kigali">Kigali</option>
                                        <option value="gisenyi">Gisenyi</option>

                                    </optgroup>

                                    <optgroup label="Occident">

                                        <option value="europe">Europe</option>
                                        <option value="amerique">Amérique</option>
                                        <option value="asie">Asie</option>

                                    </optgroup>
                                </select>
                            </div>

                            <div class="relative">
                                <div class="mb-1"> <span>Image Profil:</span>
                                    <div class="relative border-dotted h-32 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                                        <div class="absolute">
                                            <div class="flex flex-col items-center"> <i class="fa fa-folder-open fa-3x text-blue-700"></i> <span class="block text-gray-400 font-normal">Attacher votre image ici</span> </div>
                                        </div> <input type="file" class="h-full w-full opacity-0" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <button type="submit" class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">S'enregistrer</button>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</section>


@stop
