<?php

namespace App\Http\Controllers;

use App\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('vendedor.index')->with('vendedores',$vendedores);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vendedor::create($request->all());
        return redirect('vendedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendedor $vendedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendedor $vendedor)
    {
        //
        return view('vendedor.edit')->with('vendedor',$vendedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendedor $vendedor)
    {
        //
        $vendedor->update($request->all());
        return redirect('vendedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendedor $vendedor)
    {
        //
    }
}
