<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Armaduras;
use Illuminate\Support\Facades\Auth;
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
        return redirect('login');
    }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
        $armad = Armaduras::find($id);
        $alt = $armad->decrement('vis');   
        if ($alt) {
        return redirect()->route('armaduras.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
