<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Talentos;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class TalentosController extends Controller
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
        $talento = Talentos::where('vis',1)->get();
        
        return view('admin.talentos_list', compact('talento'));

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
        $talento = Talentos::orderBy('id')->get();  
        return view('admin.talentos_form', compact('opc', 'talentos'));
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
        $talentos = Talentos::create($info);
        if ($talentos) {
            return redirect()->route('talentos.index')
                            ->with('status', $request->nome_tal . ' Incluído!');
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
        $talento = Talentos::find($id);

        return view('admin.talentos_view', compact('talento'));
    
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
        $talentos = Talentos::find($id); 
        $opc = 2;
        return view('admin.talentos_form', compact('talentos','opc'));
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
            'pre_requisito_tal' => 'required',
            ]);

        $talentos = Talentos::find($id);

        $dados = $request->all();

        $alt = $talentos->update($dados);

        if ($alt) {
            return redirect()->route('talentos.index')
                            ->with('status', $request->nome_tal . ' Alterado!');
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
        $talentos = Talentos::find($id);
        $alt = $talentos->decrement('vis');   
        if ($alt) {
        return redirect()->route('talentos.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
