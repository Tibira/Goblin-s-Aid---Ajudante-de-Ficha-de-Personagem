<?php

namespace App\Http\Controllers;

use App\Classes;
use App\User;
use Auth;
use App\Fichas;
use App\Http\Controllers\Controller;
use App\Talentos;
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
        $fichas = Fichas::where('vis', 1)->where('user_id',$id)->get();
        $classe = Classes::orderBy('nome_cla')->get();
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
        $talentos = Talentos::orderBy('nome_tal')->get();
        $ficha = Fichas::orderBy('id')->get();
        $classes = Classes::orderBy('nome_cla')->get();
        return view('users.ficha', compact('ficha', 'talentos', 'classes','acao'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $talentos = Talentos::orderBy('nome_tal')->get();
        $classes = Classes::orderBy('id')->get();
        return view('users.ficha', compact('ficha', 'talentos', 'classes', 'acao'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function salvar()
    {
        //
    }
}
