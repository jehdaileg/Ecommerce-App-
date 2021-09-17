<div id="search-bar" class="fixed inset-0  z-20 h-screen bg-black/25" x-show="open">

    <div class="h-full pb-6 mx-6 mt-12 sm:mx-auto max-w-2xl max-h-80">
        <div class="float-right mb-4 text-4xl text-white cursor-pointer" @click="hide">&times;</div>

        <form action="{{ url()->current() }}" method="get" class="clear-both p-4 bg-white">
            <input type="text" @input.debounce.500="searchProducts" x-model="query" class="border py-2 w-full" x-ref="inputSearch" autofocus>
        </form>

        <template x-if="results.length">
            <ul class="h-auto p-6 -mt-2 overflow-auto bg-white">
                <template x-for="(product, i) in results" :key="i">
                    <li class="flex mb-6">
                        <img class="object-cover w-2/6 h-24 rounded-sm shadow-sm" :src="`/storage/${product.image}`" :alt="product.nom">

                        <div class="ml-2">
                            <h4 class="text-xl text-gray-800" x-text="`${product.description.substr(0, 20)}...`"></h4>
                            <div>&dollar; <span class="font-bold" x-text="product.prix"></span></div>
                            <a :href="`/products/${product.id}`" class="underline">En voir plus</a>

                        </div>
                    </li>
                </template>
            </ul>

        </template>

    </div>
</div>
