@extends('layouts.master')

@section('content')

<div class="flex justify-between text-center" x-data>

    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
          <div>
            <h2 class="text-2xl text-indigo-500 font-semibold leading-tight">Panier</h2>

          </div>

          @if(Session::get('cart'))

          <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div
              class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
            >
              <table class="min-w-full leading-normal">
                <thead>
                  <tr>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      Produits
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      Prix
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      Quantité
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                    >
                      Total Partiel
                    </th>
                    <th
                      class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"
                    ></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach(Session::get('cart') as $key => $product)

                  <tr>
                    <td class="px-5 py-5 bg-white text-sm">
                      <div class="flex">
                        <div class="flex-shrink-0 w-10 h-10">
                          <img
                            class="w-full h-full rounded-full"
                            src=""
                            alt=""
                          />
                        </div>
                        <div class="ml-3">
                          <p class="text-gray-900 whitespace-no-wrap">
                            <img src="{{ asset('storage/'. $product['image']) }}" alt="">
                          </p>
                          <p class="text-gray-600 whitespace-no-wrap">{{ $product['nom'] }}</p>
                        </div>
                      </div>
                    </td>
                    <td class="px-5 py-5 bg-white text-sm">
                      <p class="text-gray-900 whitespace-no-wrap">{{ $product['prix'] }}</p>
                      <p class="text-gray-600 whitespace-no-wrap">USD</p>
                    </td>
                    <td class="px-2 py-3 text-center">
                        <form x-ref="formqty" action="{{ route('cart.update', $product['id']) }}" method="POST" x-data>
                            @csrf

                            @method('PUT')

                            <select @change="$refs.formqty.submit()" class="py-1 text-xs focus:outline-none" name="quantity" id="">
                                @foreach(range(1, $product['quantity']) as $qty)

                                <option selected="{{ filter_var($qty == $product['qty_panier'], FILTER_VALIDATE_BOOLEAN) }}" value="{{$qty}}">{{ $qty }}</option>
                                @endforeach
                            </select>
                        </form>
                    </td>
                    <td class="px-5 py-5 bg-white text-sm">
                      <span
                        class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight"
                      >
                        <span
                          aria-hidden
                          class="absolute inset-0 bg-red-200 opacity-50 rounded-full"
                        ></span>
                        <span class="relative">$ {{ $product['prix'] * $product['qty_panier'] }}</span>
                      </span>
                    </td>
                    <td class="px-5 py-5 bg-white text-sm text-right">
                      <button
                        type="button"
                        class="inline-block text-gray-500 hover:text-gray-700"
                      >
                        <svg
                          class="inline-block h-6 w-6 fill-current"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z"
                          />
                        </svg>
                      </button>
                    </td>
                  </tr>

                  @endforeach
                </tbody>
                <tfoot>
                    <tr class="font-bold capitalize">
                        <td class="px-2 py-3" colspan="3">Total Général </td>
                        <td class="px-2 py-3 text-right">$ {{ array_reduce(Session::get('cart'), fn($c,$i) => $c + $i['prix'] * $i['qty_panier']) }}</td>
                    </tr>
                </tfoot>
              </table>


            </div>
          </div>





        </div>
      </div>


      <section class="container mx-auto px-4 sm:px-8">

        <div id="summary" class="w-1/4 px-8 py-10 border-2 border-indigo-500">
            <h1 class="font-semibold text-indigo-500 text-2xl border-b pb-8">Resumé Commandes</h1>
            <div class="flex justify-between mt-10 mb-5">
              <span class="font-semibold text-sm uppercase">{{ count(Session::get('cart')) }} Produit</span>
              <span class="font-semibold text-red-500 text-sm">$ {{ array_reduce(Session::get('cart'), fn($c, $i)=> $c + $i['prix'] * $i['qty_panier']) }}</span>
            </div>
            <div>
            <hr class="p-2">
              <label class="font-medium inline-block mb-3 text-sm uppercase">Livraison</label>
              <select class="block p-2 text-gray-600 w-full text-sm">
              <optgroup label="Livraison A domicile">
                  <option value="">$ 4</option>
                  <option value="">$ 10</option>

              </optgroup>

              <optgroup label="Livraison avec Service assurance">
                  <option value="">$ 10</option>
                  <option value="">$ 15</option>

              </optgroup>
              </select>
            </div>

            <div class="py-10">
              <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Code de Promotion:
              </label>
              <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full">
            </div>
            <button class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white">Appliquer</button>

            <hr class="p-1">
            <div class="border-t mt-8">
              <div class="flex font-semibold justify-between py-6 text-sm">
                <span class="lowercase text-red-500">Total Général:</span>
                <span class="text-red-500">$ {{ array_reduce(Session::get('cart'), fn($c, $i) => $c + $i['prix'] * $i['qty_panier']) }}</span>
              </div>





            </div>
          </div>

          <div id="buttonContainer">


          </div>

      </section>


      @else

      ⚠️ Aucun produit dans le panier

    @endif



</div>

<!-- Update the PayPal JavaScript SDK with buttons and funding-eligibility -->
<script src="https://www.paypal.com/sdk/js?client-id=AV-KatXE8IAcb3ohkwJUacPCdwxRaO2G0vd_uz9Ay93N55NLodLt6QhOE3G3P7uW6DcPCsKgr_9_BCtv&components=buttons,funding-eligibility"></script>
<script>

paypal.Buttons({
            fundingSource: paypal.FUNDING.PAYPAL,

            style: {
                layout: 'vertical',
                color: 'silver',
                shape: 'pill',
                label: 'paypal'
            },

            createOrder(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: {{ array_reduce(Session::get('cart'), fn($c, $i) => $c + $i['prix'] * $i['qty_panier']) }}
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    window.location.replace("{{ route('orders.capture') }}")
                });
            }
        }).render('#buttonContainer')

;</script>


@stop
