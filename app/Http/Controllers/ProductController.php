<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// usar clase
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // ejemplos relaciones
    // public function index()
    // {

    //     $user = User::find(1);  

    //     // dd($user);

    //     // dd($user->products);   

    //     dd($user->products()->sync(1));

    //     $user = Auth::user();

    //  // $email = Auth::user()->email;
    //  // $id = Auth::user()->id;

    //     return response()->json($user);
    // }
    public function index()
    {

        // $user = Auth::user();

     $email = Auth::user()->email;
     // $id = Auth::user()->id;

     // productos comprados, el where, where funciona como un and
        $users = DB::table('users as u')
        ->leftJoin('users_products as up', 'u.id', '=', 'up.user_id')
        ->leftJoin('products as p', 'p.id', '=', 'up.product_id')
            // ->select('name', 'email as user_email')
        ->select('*')
        ->where('u.email', $email)
        ->where('u.is_buyer',1)
        ->get();

          // productos en venta
        $product_all = DB::table('products as p')
        ->leftJoin('prices as pr', 'pr.id', '=', 'p.price_id')        
        ->get();

        // return response()->json($users);

        return view('products.index', [
            'products' => $users,
            'products_sell' => $product_all,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return response()->json($id);
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
