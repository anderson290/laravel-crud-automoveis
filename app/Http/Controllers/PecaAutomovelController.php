<?php

namespace App\Http\Controllers;
use App\Peca;
use App\Automovel;
use App\Peca_automovel;
use Illuminate\Http\Request;

class PecaAutomovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peca_automovels = JogadorJogos::all();
        return view('pecaAutomovels.index')->with('pecaAutomovels', $peca_automovels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pecas = Peca::all();
        $automovels = Automovel::all();
        return view ('pecaAutomovels.create', ['pecas' => $pecas, 'automovels' => $automovels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peca = Peca::find($request->all()['peca_id']);
        $automovel = Automovel::find($request->all()['automovel_id']);
        $automovel->pecas()->attach($peca);
        return redirect('peca-automovel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peca_automovel  $peca_automovel
     * @return \Illuminate\Http\Response
     */
    public function show(Peca_automovel $peca_automovel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peca_automovel  $peca_automovel
     * @return \Illuminate\Http\Response
     */
    public function edit(Peca_automovel $peca_automovel)
    {
        $pecas = Peca::all();
        $automovels = Automovel::all();
        return view('peca-automovel.edit', ['pecas' => $pecas, 'automovels' => $automovels]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peca_automovel  $peca_automovel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peca_automovel $peca_automovel)
    {
        $peca_automovel->update($request->all());
        return redirect('peca-automovel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peca_automovel  $peca_automovel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peca_automovel $peca_automovel)
    {
        //
    }
}
