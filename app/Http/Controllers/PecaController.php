<?php

namespace App\Http\Controllers;

use App\Peca;
use App\Automovel;
use Illuminate\Http\Request;

class PecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtem todos os Pecas cadastrados e os passa para view
        $pecas = Peca::all();
        return view('peca.index')->with('pecas',$pecas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $automovel = Automovel::all();

        return view ('peca.create', ['automovel' => $automovel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Peca::create($request->all());
        return redirect('peca');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peca  $Peca
     * @return \Illuminate\Http\Response
     */
    public function show(Peca $peca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peca  $Peca
     * @return \Illuminate\Http\Response
     */
    public function edit(Peca $peca)
    {        
        $automovel = Automovel::all();

        return view('peca.edit', ['automovel' => $automovel])->with('peca',$peca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peca  $Peca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peca $peca)
    {
        $peca->update($request->all());
        return redirect('peca'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peca  $Peca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peca $peca)
    {
        //
    }
}
