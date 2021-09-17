@extends('layouts.master')


@section('content_After_navigation_section')

<section class="w-full bg-white mx-auto">

    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col lg:flex-row">

            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">
                <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    <h4 class="text-2xl font-semibold text-indigo-600">Nouveau Produit</h4>

                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="relative w-full mt-10 space-y-8">

                            <div class="relative">
                                <label class="font-medium text-gray-900">Nom:</label>
                                <input type="text" name="nom" class="block w-full px-2 py-2 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50 @error('nom') border-red-500 @enderror" placeholder="Entrer nom..." value="{{ old('nom') }}">
                                @error('nom')

                                <div class="text-red-500"> {{ $message }} </div>

                                @enderror
                            <div class="relative">
                                <label class="font-medium text-gray-900">Prix:</label>
                                <input type="number" name="prix" class="block @error('prix') border-red-500 @enderror w-full px-2 py-2 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" placeholder="Entrer prix..." value="{{ old('prix') }}">
                                @error('prix')
                                <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="relative">
                                <label class="font-medium text-gray-900">Category:</label>
                                <select name="category_id" class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg  focus:shadow-outline">

                                    @foreach($categories as $category)

                                    <option value="{{ $category->id }}">{{ $category->nom }}</option>

                                    @endforeach

                                </select>

                            </div>

                            <div class="relative">
                                <label for="message" class="font-medium text-gray-900">Description</label>
                                <textarea id="message" name="description" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                              </div>


                            <div class="relative">
                                <div class="font-medium text-gray-900"> <span>Image:</span>
                                    <div class="relative border-dotted h-32 rounded-lg border-dashed border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                                        <div class="absolute">
                                            <div class="flex flex-col items-center"> <i class="fa fa-folder-open fa-3x text-blue-700"></i> <span class="block text-gray-400 font-normal">Attacher l'image ici</span> </div>
                                        </div> <input type="file" class="h-full w-full opacity-0" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <button type="submit" class="inline-block mt-2 w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">Enregistrer</button>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</section>



@stop
