<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caracteristicas;
use App\Http\Controllers\Controller;

class CaracteristicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carac = Caracteristicas::where('vis',1)->get();
        
        return view('admin.caracteristicas_list', compact('carac'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opc = 1;
        $carac = Caracteristicas::orderBy('id')->get();  
        return view('admin.caracteristicas_form', compact('opc', 'carac'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $info = $request->all();
        $carac = Caracteristicas::create($info);
        if ($carac) {
            return redirect()->route('caracteristicas.index')
                            ->with('status', $request->nome_car . ' Incluído!');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carac = Caracteristicas::find($id);

        return view('admin.caracteristicas_view', compact('carac'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carac = Caracteristicas::find($id); 
        $opc = 2;
        return view('admin.caracteristicas_form', compact('carac','opc'));
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
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
            'nivel' => 'required|numeric',
            'classe_id' => 'required|numeric',
            ]);

        $carac = Caracteristicas::find($id);

        $dados = $request->all();

        $alt = $carac->update($dados);

        if ($alt) {
            return redirect()->route('caracteristicas.index')
                            ->with('status', $request->nome_car . ' Alterado!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carac = Caracteristicas::find($id);
        $alt = $carac->decrement('vis');   
        if ($alt) {
        return redirect()->route('caracteristicas.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
