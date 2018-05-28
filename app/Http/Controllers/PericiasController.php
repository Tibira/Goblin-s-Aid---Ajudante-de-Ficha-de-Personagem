<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pericias;
use App\Http\Controllers\Controller;

class PericiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peric = Pericias::where('vis',1)->get();
        
        return view('admin.pericias_list', compact('peric'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opc = 1;
        $peric = Pericias::orderBy('id')->get();  
        return view('admin.pericias_form', compact('opc', 'peric'));
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
        $peric = Pericias::create($info);
        if ($peric) {
            return redirect()->route('pericias.index')
                            ->with('status', $request->nome_per . ' Incluído!');
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
        $peric = Pericias::find($id);

        return view('admin.pericias_view', compact('peric'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peric = Pericias::find($id); 
        $opc = 2;
        return view('admin.pericias_form', compact('peric','opc'));
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
            'nome_per' => 'required',
            'descricao_per' => 'required',
            'vis' => 'required'
            ]);

        $peric = Pericias::find($id);

        $dados = $request->all();

        $alt = $peric->update($dados);

        if ($alt) {
            return redirect()->route('pericias.index')
                            ->with('status', $request->nome_per . ' Alterado!');
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
        $peric = Pericias::find($id);
        $alt = $peric->decrement('vis');   
        if ($alt) {
        return redirect()->route('pericias.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
