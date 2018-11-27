<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Armas;
use Illuminate\Support\Facades\Auth;
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
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
        if (!Auth::check()) {
            return redirect('login');
        }
    $arma = Armas::find($id);

    $alt = $arma->decrement('vis');   

    if ($alt) {
        return redirect()->route('armas.index')
                        ->with('status',  ' Removido!');
    }    
    }
}
