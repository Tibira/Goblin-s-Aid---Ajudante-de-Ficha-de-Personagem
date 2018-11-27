<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proficiencias;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ProficienciasController extends Controller
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
        $profic = Proficiencias::where('vis',1)->get();
        
        return view('admin.proficiencias_list', compact('profic'));
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
        $profic = Proficiencias::orderBy('id')->get();  
        return view('admin.proficiencias_form', compact('opc', 'profic'));
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
        $profic = Proficiencias::create($info);
        if ($profic) {
            return redirect()->route('proficiencias.index')
                            ->with('status', $request->nome_pro . ' Incluído!');
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
        $profic = Proficiencias::find($id);

        return view('admin.proficiencias_view', compact('profic'));
    
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
        $profic = Proficiencias::find($id); 
        $opc = 2;
        return view('admin.proficiencias_form', compact('profic','opc'));
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

        $profic = Proficiencias::find($id);

        $dados = $request->all();

        $alt = $profic->update($dados);

        if ($alt) {
            return redirect()->route('proficiencias.index')
                            ->with('status', $request->nome_pro . ' Alterado!');
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
        $profic = Proficiencias::find($id);
        $alt = $profic->decrement('vis');   
        if ($alt) {
        return redirect()->route('proficiencias.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
