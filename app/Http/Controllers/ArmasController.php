<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Armas;
use App\Http\Controllers\Controller;

class ArmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arma = Armas::where('vis',1)->get();
        
        return view('admin.armas_list', compact('arma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opc = 1;
        $arma = Armas::orderBy('id')->get();  
        return view('admin.armas_form', compact('opc', 'arma'));
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
        $arma = Armas::create($info);
        if ($arma) {
            return redirect()->route('armas.index')
                            ->with('status', $request->nome_arm . ' Incluído!');
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
        $arma = Armas::find($id);

        return view('admin.armas_view', compact('arma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arma = Armas::find($id); 
        $opc = 2;
        return view('admin.armas_form', compact('arma','opc'));
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
            'nome_arm' => 'required',
            'tipo_arm' => 'required',
            'preco_arm' => 'required',
            'peso_arm' => 'required|numeric',
            'dano_arm' => 'required'
            ]);

        $arma = Armas::find($id);

        $dados = $request->all();

        $alt = $arma->update($dados);

        if ($alt) {
            return redirect()->route('armas.index')
                            ->with('status', $request->nome_arm . ' Alterado!');
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
    $arma = Armas::find($id);

    $alt = $arma->decrement('vis');   

    if ($alt) {
        return redirect()->route('armas.index')
                        ->with('status',  ' Removido!');
    }    
    }
}
