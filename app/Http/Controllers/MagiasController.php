<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magias;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class MagiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if (!Auth::check()) {
            return redirect('login');
        }
        $magias = Magias::where('vis',1)->get();
        return view('admin.magias_list', compact('magias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
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
        if (!Auth::check()) {
            return redirect('login');
        }
        $magias = Magias::find($id);
        $alt = $magias->decrement('vis');   
        if ($alt) {
        return redirect()->route('magias.index')
                        ->with('status',  ' Removido!');
    }   
    }
    public function ws($id = null) {
        //indica o tipo de retorno do metodo
        header("content-type: application/json; charset=utf-8");
        if ($id == null) {
            $retorno = array(
                "situacao" => "erro",
                'nome_mag' => null,
            'descricao_mag' => null,
            'conjuradores_mag' => null,
            'nivel_mag' => null,
            'escola_mag' => null,
            'tempo_mag' => null,
            'componentes_mag' => null,
            'alcance_mag' => null,
            'duracao_mag' => null);
            
        } else {
            // obtem o registro do id passado
            $reg = Magias::find($id);

            //se encontrou
            if (isset($reg)) {
                $retorno = array(
                    "situacao" => "encontrado",
                    'nome_mag' => $reg->nome_mag,
            'descricao_mag' => $reg->descricao_mag,
            'conjuradores_mag' => $reg->conjuradores_mag,
            'nivel_mag' => $reg->nivel_mag,
            'escola_mag' => $reg->escola_mag,
            'tempo_mag' => $reg->tempo_mag,
            'componentes_mag' => $reg->componentes_mag,
            'alcance_mag' => $reg->alcance_mag,
            'duracao_mag' => $reg->duracao_mag);
            } else {
                $retorno = array(
                    "situacao" => "inexistente",
                    'nome_mag' => null,
            'descricao_mag' => null,
            'conjuradores_mag' => null,
            'nivel_mag' => null,
            'escola_mag' => null,
            'tempo_mag' => null,
            'componentes_mag' => null,
            'alcance_mag' => null,
            'duracao_mag' => null);
            }
        }
        //converte array para o formato JSON
        echo json_encode($retorno, JSON_PRETTY_PRINT);
    }

}
