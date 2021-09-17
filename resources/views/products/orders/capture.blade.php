@extends('layouts.master')

@section('content')

<section class="py-4">

    <div class="max-w-[30rem] mx-auto mt-12">

     <div class="text-2xl">Merci d'avoir acheté nos produits. Vous pouvez vous diriger vers le <a class="italic underline" href="{{ route('products.index') }}">Nos Produits</a> pour choisir et acheter d'autres produits.</div>

    </div>
</section>

@stop
