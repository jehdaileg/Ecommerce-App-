@extends('layouts.master')


@section('search-bar')
    @include('components.search-bar')
@endsection

@section('content_After_navigation_section')

  @if(session('success'))

     <div class="rounded-lg px-2 py-2 text-center bg-green-900 text-green-600 "> {{ session('success') }}</div>

  @endif

  @if(session('message'))

  <div class="rounded-lg px-2 py-2 text-center bg-green-900 text-green-600 "> {{ session('message') }}</div>

@endif

@can('create-product')
<a href="{{ route('products.create') }}" class="transition duration-500 ease-in-out p-1 m-1 bg-blue-500 hover:bg-red-500 transform hover:-translate-y-1 hover:scale-110 text-white font-bold py-2 px-4 rounded">
    Ajouter
  </a>
@endcan



<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto ">
      <div class="flex flex-wrap -m-4  ">

        @foreach($products as $product)


        <div class="lg:w-1/4 md:w-1/2 p-4 w-full transition duration-500 ease-in-out hover:-translate-y-1 hover:scale-110">
          <a class="block relative h-48 rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ asset('storage/' .$product->image) }}">
          </a>
          <div class="mt-4">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">{{ $product->category->nom  }}</h3>
            <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->nom }}</h2>
            <p class="mt-1">$ {{ $product->prix }}</p>
          </div>



          <div class="flex justify-between">
            <div class="mt-2">
                <a href="{{ route('products.show', $product->id) }}" class="transition duration-500 ease-in-out mx-0 bg-blue-500 hover:bg-red-500 transform hover:-translate-y-1 hover:scale-110 text-white font-bold py-2 px-4 rounded">
                    Voir
                  </a>
              </div>

              @if(collect(Session::get('cart'))->pluck('id')->contains($product->id))

              <div class="mt-2">

                <form action="{{ route('cart.destroy', $product->id) }}" method="post">
                  @csrf
                  @method('DELETE')

                  <input type="hidden" name="id" value="{{ $product->id }}">

                  <button type="submit" class="transition duration-500 ease-in-out mx-0 bg-blue-500 hover:bg-red-500 transform hover:-translate-y-1 hover:scale-110 text-white font-bold py-2 px-4 rounded">Retirer du panier</button>


                </form>

              </div>

              @else

              <div class="mt-2">
                  <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="id" value="{{ $product->id }}">

                    <button type="submit" class="transition duration-500 ease-in-out mx-0 bg-blue-500 hover:bg-red-500 transform hover:-translate-y-1 hover:scale-110 text-white font-bold py-2 px-4 rounded">Ajouter au panier</button>
                </form>

              </div>

              @endif


          </div>


        </div>

        @endforeach


      </div>
    </div>

    {{ $products->links() }}

  </section>

@stop
