<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Itens;
use App\Http\Controllers\Controller;

class ItensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itens = Itens::where('vis',1)->get();
        
        return view('admin.itens_list', compact('itens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opc = 1;
        $itens = Itens::orderBy('id')->get();  
        return view('admin.itens_form', compact('opc', 'itens'));
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
        $itens = Itens::create($info);
        if ($itens) {
            return redirect()->route('itens.index')
                            ->with('status', $request->nome_itm . ' Incluído!');
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
        $itens = Itens::find($id);

        return view('admin.itens_view', compact('itens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $itens = Itens::find($id); 
        $opc = 2;
        return view('admin.itens_form', compact('itens','opc'));
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
            'nome_itm' => 'required',
            'descricao_itm' => 'required',
            'preco_itm' => 'required',
            'peso_itm' => 'required|numeric',
            'vis' => 'required'
            ]);

        $itens = Itens::find($id);

        $dados = $request->all();

        $alt = $itens->update($dados);

        if ($alt) {
            return redirect()->route('itens.index')
                            ->with('status', $request->nome_itm . ' Alterado!');
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
        $itens = Itens::find($id);
        $alt = $itens->decrement('vis');   
        if ($alt) {
        return redirect()->route('itens.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
