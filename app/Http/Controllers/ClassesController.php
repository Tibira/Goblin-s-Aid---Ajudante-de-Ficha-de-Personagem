<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Http\Controllers\Controller;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::where('vis',1)->get();
        
        return view('admin.classes_list', compact('classes'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opc = 1;
        $classes = Classes::orderBy('id')->get();  
        return view('admin.classes_form', compact('opc', 'classes'));
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
        $classes = Classes::create($info);
        if ($classes) {
            return redirect()->route('classes.index')
                            ->with('status', $request->nome_cla . ' Incluído!');
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
        $class = Classes::find($id);

        return view('admin.classes_view', compact('class'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classes = Classes::find($id); 
        $opc = 2;
        return view('admin.classes_form', compact('classes','opc'));
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
            'nome_cla' => 'required',
            'descricao_cla' => 'required',
            'dado_vida' => 'required',
            'vis' => 'required'
            ]);

        $classes = Classes::find($id);

        $dados = $request->all();

        $alt = $classes->update($dados);

        if ($alt) {
            return redirect()->route('classes.index')
                            ->with('status', $request->nome_cla . ' Alterado!');
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
        $classes = Classes::find($id);
        $alt = $classes->decrement('vis');   
        if ($alt) {
        return redirect()->route('classes.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
