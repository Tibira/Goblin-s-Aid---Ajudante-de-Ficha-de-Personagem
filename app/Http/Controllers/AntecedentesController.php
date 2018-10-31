<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Antecedentes;
use App\Http\Controllers\Controller;
class AntecedentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $antec = Antecedentes::where('vis',1)->get();

        return view('admin.antecedentes_list', compact('antec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opc = 1;
        $antec = Antecedentes::orderBy('id')->get();  
        return view('admin.antecedentes_form', compact('opc', 'antec'));
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
        $antec = Antecedentes::create($info);
        if ($antec) {
            return redirect()->route('antecedentes.index')
                            ->with('status', $request->nome . ' Incluído!');
        
    }
    }    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $antec = Antecedentes::find($id);
        return view('admin.antecedentes_view', compact('antec'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $antec = Antecedentes::find($id); 
        $opc = 2;
        return view('admin.antecedentes_form', compact('antec','opc'));
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
            'itens_ant' => 'required',
            'pericias_ant' => 'required',
            'proficiencias_ant' => 'required',
            'carac_extras_ant' => 'required'
            ]);

        $antec = Antecedentes::find($id);

        $dados = $request->all();

        $alt = $antec->update($dados);

        if ($alt) {
            return redirect()->route('antecedentes.index')
                            ->with('status', $request->nome_ant . ' Alterado!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $antec = Antecedentes::find($id);
        $alt = $antec->decrement('vis');   
        if ($alt) {
        return redirect()->route('antecedentes.index')
                        ->with('status',  ' Removido!');
    }    
    
    }
}
