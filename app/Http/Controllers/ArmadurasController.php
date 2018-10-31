<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Armaduras;
use App\Http\Controllers\Controller;
class ArmadurasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $armad = Armaduras::where('vis',1)->get();
        
        return view('admin.armaduras_list', compact('armad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opc = 1;
        $armad = Armaduras::orderBy('id')->get();  
        return view('admin.armaduras_form', compact('opc', 'armad'));
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
        $armad = Armaduras::create($info);
        if ($armad) {
            return redirect()->route('armaduras.index')
                            ->with('status', $request->nome_armd . ' Incluído!');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
        $armad = Armaduras::find($id);

        return view('admin.armaduras_view', compact('armad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $armad = Armaduras::find($id); 
        $opc = 2;
        return view('admin.armaduras_form', compact('armad','opc'));
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
            'preco_armd' => 'required',
            'peso_armd' => 'required|numeric',
            'class_armad' => 'required|numeric',
            ]);

        $armad = Armaduras::find($id);

        $dados = $request->all();

        $alt = $armad->update($dados);

        if ($alt) {
            return redirect()->route('armaduras.index')
                            ->with('status', $request->nome_armd . ' Alterado!');
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
        $armad = Armaduras::find($id);
        $alt = $armad->decrement('vis');   
        if ($alt) {
        return redirect()->route('armaduras.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
