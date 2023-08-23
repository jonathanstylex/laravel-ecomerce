<x-app-layout>
    <x-slot name="header">

       <h1>Checkout</h1>

     {{--   <h2>{{ $products_sell }} --}}
      {{--    <h2>{{ $products_sell->['product_name'] }} --}}
     {{--    {{exit;}}
       </h2>
 --}}
       <form method="POST" action="https://www.sandbox.paypal.com/cgi-bin/webscr">
        @csrf

        <input type='hidden' name='business' value='sb-dmymh19134302@business.example.com'>
                        <input type='hidden' name='item_name' value='{{ $products_sell->product_name }}'>
                        <input type='hidden' name='item_number' value="1">
                        <input type='hidden' name='amount' value='{{ $products_sell->price }}'>
                        <input type='hidden' name='currency_code' value='USD'>
                        <input type='hidden' name='notify_url' value='{{ route('notify') }}'>
                       
                        <input type='hidden' name='return' value='http://localhost:8080/success?id_course={{ $products_sell->id }}'> 
                        <input type='hidden' name='cancel_return' value='{{ route('cancel') }}'>

                        <input type="hidden" name="no_shipping" value="1">
                        
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="order" value="{{ $products_sell->price }}">
                        <br>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <input type="submit" class="btn btn-lg btn-block btn-danger" name="continue_payment" value="Pay Now">

                            </div>

                        </div>

    </form>


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