<x-app-layout>
    <x-slot name="header">

        @if ($products)
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Products') }}
        </h2>

        @foreach ($products as $product)
        <p>Nombre Producto: {{ $product->product_name }}</p>
        <p>Description: {{ $product->description }}</p>
        @endforeach
        @endif


        @if ($products_sell)
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products Sell') }}
        </h2>

        @foreach ($products_sell as $product)
        <p>Nombre Producto: {{ $product->product_name }}</p>
        <p>Description: {{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p>
        @endforeach
        @endif


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>