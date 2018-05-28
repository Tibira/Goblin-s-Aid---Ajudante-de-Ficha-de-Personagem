<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magias;
use App\Http\Controllers\Controller;

class MagiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $magias = Magias::where('vis',1)->get();
        return view('admin.magias_list', compact('magias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $opc = 1;
        $magia = Magias::orderBy('id')->get();  
        return view('admin.magias_form', compact('opc', 'magia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $info = $request->all();
        $magia = Magias::create($info);
        if ($magia) {
            return redirect()->route('magias.index')
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
        $magia = Magias::find($id);
        return view('admin.magias_view', compact('magia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){    
        $magia = Magias::find($id); 
        $opc = 2;
        return view('admin.magias_form', compact('magia','opc'));
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
            'nome_mag' => 'required',
            'descricao_mag' => 'required',
            'conjuradores_mag' => 'required',
            'nivel_mag' => 'required|numeric|min:1|max:9',
            'escola_mag' => 'required',
            'tempo_mag' => 'required',
            'componentes_mag' => 'required',
            'alcance_mag' => 'required',
            'duracao_mag' => 'required',
            'vis' => 'required'
            ]);

        $magia = Magias::find($id);

        $dados = $request->all();

        $alt = $magia->update($dados);

        if ($alt) {
            return redirect()->route('magias.index')
                            ->with('status', $request->nome_mag . ' Alterado!');
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
        $magias = Magias::find($id);
        $alt = $magias->decrement('vis');   
        if ($alt) {
        return redirect()->route('magias.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
