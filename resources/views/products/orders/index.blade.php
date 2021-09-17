@extends('layouts.master')


@section('content')

<section class="py-4">

    <div class="max-w-[30rem] mx-auto">

        <div class="">
            <p>({{ collect(Session::get('cart'))->sum('qty_panier') }}) produits ajouté(s) au <a class="italic underline" href="{{ route('cart.index') }}">Panier</a></p>
            <p>Total à payer: $ <span class="font-bold">{{ array_reduce(Session::get('cart'), fn($c, $i) => $c + $i['prix'] * $i['qty_panier']) }}</span></p>
        </div>

        <h1 class="mt-4 text-4xl font-bold">Livraison</h1>

        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" x-data="order" id="formOrder" x-ref="formOrder">
            <input type="hidden" name="return" value="http://gahebeye.com/order/capture">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="sb-v47khx7701072@business.example.com">
            <input type="hidden" name="item_name" value="Vente Equipements tech ({{ collect(Session::get('cart'))->sum('qty_panier') }})">
            <input type="hidden" name="item_number" value="123">
            <input type="hidden" name="amount" value="{{ array_reduce(Session::get('cart'), fn ($c, $i) => $c + $i['prix'] * $i['qty_panier']) }}">

            <input type="hidden" name="address_override" value="1">
            <input type="hidden" name="first_name" :value="firstName">
            <input type="hidden" name="last_name" :value="lastName">
            <input type="hidden" name="address1" :value="address">
            <input type="hidden" name="city" :value="city">
            <input type="hidden" name="state" :value="state">
            <input type="hidden" name="zip" :value="zip">
            <input type="hidden" name="email" value="sb-dfdvs7704089@personal.example.com">

            <div class="flex justify-between">

                <div class="w-full">
                    <label class="text-xs uppercase" for="nom">nom</label>
                    <input type="text" class="input" id="nom" name="nom" x-model="firstName" autofocus>
                </div>

                <div class="w-full ml-2">
                    <label class="text-xs uppercase" for="prenom">prenom</label>
                    <input type="text" class="input" id="prenom" name="prenom" x-model="lastName">
                </div>
            </div>

            <div class="flex justify-between mt-2">

                <div class="w-full">
                    <label class="text-xs uppercase" for="pays">pays</label>
                    <input type="text" class="input" id="pays" name="pays" x-model="state">
                </div>

                <div class="w-full ml-2">
                    <label class="text-xs uppercase" for="province">province</label>
                    <input type="text" class="input" id="province" name="province" x-model="city">
                </div>

            </div>

            <div class="mt-2">
                <label class="text-xs uppercase" for="adresse2">addresse</label>
                <textarea name="adresse" id="adresse2" class="h-20 input" x-model="address"></textarea>
            </div>

            <div class="flex justify-between mt-2">

                <div class="w-full">
                    <label class="text-xs uppercase" for="code_postal">code postal</label>
                    <input type="text" class="input" id="code_postal" name="code_postal" x-model="zip">
                </div>

                <div class="w-full ml-2">
                    <label class="text-xs uppercase" for="tel">tel</label>
                    <input type="tel" id="tel" class="input" name="tel" x-model="tel">
                </div>
            </div>

            <div class="mt-6 sm:max-w-xs sm:mx-auto">
                <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full" name="submit">Confirmer et payer </button>
                <p class="mt-4 text-sm">Paypal est notre partenaire principal pour le moment.</p>
            </div>

        </form>

    </div>
</section>

@stop
