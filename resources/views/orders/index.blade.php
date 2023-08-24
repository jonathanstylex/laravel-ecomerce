<x-app-layout>
    <x-slot name="header">



        <div class="row">
            @if ($orders)

            <div class="offset-6">
                <h2 class="bg-secondary text-white">
                    {{ __('Orders') }}
                </h2>
            </div>

            <div class="offset-6">

                @foreach ($orders as $order)
                <p>Order: {{ $order->orders }}</p>
                <p>Email: {{ $order->email }}</p>
                <p>Payer Email: {{ $order->payer_email }}</p>
                <p>Producto: {{ $order->product_id }}</p>
                <p>ID Transaccion: {{ $order->payer_id }}</p>


                @endforeach

            </div>
            @endif

        </div>


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