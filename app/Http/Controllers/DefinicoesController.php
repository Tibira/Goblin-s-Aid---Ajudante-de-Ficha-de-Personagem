<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Definicoes;
use Illuminate\Support\Facades\Auth;
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
        $info = $request->all();
        $defin = Definicoes::create($info);
        if ($defin) {
            return redirect()->route('definicoes.index')
                            ->with('status', $request->nome . ' Incluído!');
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
            ]);

        $defin = Definicoes::find($id);

        $dados = $request->all();

        $alt = $defin->update($dados);

        if ($alt) {
            return redirect()->route('definicoes.index')
                            ->with('status', $request->nome . ' Alterado!');
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
        if (!Auth::check()) {
            return redirect('login');
        }
        $defin = Definicoes::find($id);
        $alt = $defin->decrement('vis');   
        if ($alt) {
        return redirect()->route('definicoes.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
