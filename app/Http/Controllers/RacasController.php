<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Racas;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class RacasController extends Controller
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
        $racas = Racas::where('vis',1)->get();
        
        return view('admin.racas_list', compact('racas'));

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
        $racas = Racas::orderBy('id')->get();  
        return view('admin.racas_form', compact('opc', 'racas'));
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
        $racas = Racas::create($info);
        if ($racas) {
            return redirect()->route('racas.index')
                            ->with('status', $request->nome_rac . ' Incluído!');
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
        $raca = Racas::find($id);

        return view('admin.racas_view', compact('raca'));
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
        $racas = Racas::find($id); 
        $opc = 2;
        return view('admin.racas_form', compact('racas','opc'));
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
            'tracos_raciais' => 'required',
            'habilidade' => 'required',
            'val_hab' => 'required|numeric',
            'deslocamento' => 'required|numeric',
            ]);

        $racas = Racas::find($id);

        $dados = $request->all();

        $alt = $racas->update($dados);

        if ($alt) {
            return redirect()->route('racas.index')
                            ->with('status', $request->nome_rac . ' Alterado!');
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
        $racas = Racas::find($id);
        $alt = $racas->decrement('vis');   
        if ($alt) {
        return redirect()->route('racas.index')
                        ->with('status',  ' Removido!');
    }   
    }
}
