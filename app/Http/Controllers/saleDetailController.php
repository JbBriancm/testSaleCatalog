<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use App\Models\Clients;
use App\Models\Products;
use App\Models\saleDetail;

use Illuminate\Http\Request;

class saleDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $sales = saleDetail::with(['products','clients'])->get();

       
       
        return view('sales.index', compact('sales')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $clients = Clients::all();
        $products = Products::all();
        return view('sales.create', compact('clients','products')); 
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
        $sale = new saleDetail();

        $sale->product_id = $request->product_id;
        $sale->client_id = $request->client_id;
        $sale->price = $request->price;
        $sale->amount = $request->amount;
        $sale->sale_type = $request->sale_type;

        

        $sale->subtotal = $sale->price * $sale->amount;

        $sale->save();
    
        return redirect('/sales')->with('success', 'Producto registrado con éxito.'); 


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
