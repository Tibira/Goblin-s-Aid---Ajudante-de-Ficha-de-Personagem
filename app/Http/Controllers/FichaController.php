<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Fichas;
use App\Http\Controllers\Controller;
use App\Racas;
use App\Talentos;
use App\User;
use Auth;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $fichas = Fichas::where('vis', 1)->where('user_id', $id)->get();
        $classe = Classes::orderBy('nome')->get();
        return view('users.fichas', compact('fichas', 'classe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $acao = 0;
        $talentos = Talentos::orderBy('nome')->get();
        $ficha = Fichas::orderBy('id')->get();
        $classes = Classes::orderBy('nome')->get();
        $racas = Racas::orderBy('nome')->get();
        $user_id = Auth::user()->id;
        return view('users.ficha', compact('ficha', 'talentos', 'classes', 'acao', 'racas', "user_id"));
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
        
        $ficha = Fichas::create($info);
        if ($ficha) {
            return redirect()->route('fichas.index');
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
        $acao = 1;
        $ficha = Fichas::find($id);
        $talentos = Talentos::orderBy('nome')->get();
        $classes = Classes::orderBy('id')->get();
        $racas = Racas::orderBy('id')->get();
        return view('users.ficha', compact('ficha', 'talentos', 'classes', 'acao', 'racas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $fich = Fichas::find($id);
        $dados = $request->all();
        $alt = $fich->update($dados);
        if ($alt) {
            return redirect()->route('fichas.index');
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
        $fich = Fichas::find($id);
        $alt = $fich->decrement('vis');
        if ($alt) {
            return redirect()->route('fichas.index');
        }
    }
    public function pergunta()
    {
        $racas = Racas::paginate(6);
        $classes = Classes::paginate(6);
        return view('users.pesquisa', compact('classes', 'racas'));
    }

}
