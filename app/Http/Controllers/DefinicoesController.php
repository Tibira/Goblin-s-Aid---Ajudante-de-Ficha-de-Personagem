<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Definicoes;
use App\Http\Controllers\Controller;
class DefinicoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $def = Definicoes::where('vis',1)->get();
            
            return view('admin.definicoes_list', compact('def'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opc = 1;
        $defin = Definicoes::orderBy('id')->get();  
        return view('admin.definicoes_form', compact('opc', 'defin'));
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
        $defin = Definicoes::create($info);
        if ($defin) {
            return redirect()->route('definicoes.index')
                            ->with('status', $request->item . ' Incluído!');
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
        $defin = Definicoes::find($id);

        return view('admin.definicoes_view', compact('defin'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $defin = Definicoes::find($id); 
        $opc = 2;
        return view('admin.definicoes_form', compact('defin','opc'));
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
            'item' => 'required',
            'definicao' => 'required',
            ]);

        $defin = Definicoes::find($id);

        $dados = $request->all();

        $alt = $defin->update($dados);

        if ($alt) {
            return redirect()->route('definicoes.index')
                            ->with('status', $request->item . ' Alterado!');
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
        $defin = Definicoes::find($id);
        $alt = $defin->decrement('vis');   
        if ($alt) {
        return redirect()->route('definicoes.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
