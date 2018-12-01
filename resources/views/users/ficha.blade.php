@extends('users.barra')

@section('conteudo')
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<style>
.buttons{
    margin-top: 20px;
}
</style>
</head>
<body>
    <form method="post" action="{{URL::to('/pesquisa')}}" role="pesquisa">
        {{ csrf_field() }}
    
        <div class="col-sm-6">
            <div class="form-group">
                <label for="pesquisa"> O que procura? </label>
                <input type="text" id="pesquisa" name="pesquisa" class="form-control">
            </div>
        </div>
        <div class="col-sm-1">
                <label> &nbsp; </label>
            <div class="form-group">
                <label> &nbsp; </label>
                <label> &nbsp; </label>
                <button type="submit" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span></button>
            </div>
        </div>
    </form><div class='col-md-1'>
            <label> &nbsp; </label> 
    <input type="button" class="btn btn-success" value="Descansar" id="btDescansar">
</div>
<div class='col-md-1'>
        <label> &nbsp; </label>
<input type="button" class="btn btn-warning" value="Calcular" id="btCalcular">
</div> 
    
<div class="col-md-12">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
<div class='box-body'>
    @if ($acao == 0)
    <form method="post" action="{{route('fichas.store')}}" enctype="multipart/form-data">
        @else 
        <form method="post" action="{{route('fichas.update', $ficha->id)}}" enctype="multipart/form-data">
            {!! method_field('put') !!}
            @endif
           {{ csrf_field() }}
            <div class="col-md-3">
                <label for="nome_per">Nome:</label>
                <input type="text" class="form-control" id="nome_per"
                       name="nome_per"
                       value="{{$ficha->nome_per or old('nome_per')}}">
            </div>
            <div class="col-md-3">
            <label for="classe">Classe:</label>
            <select class="form-control" id="classe_id" onchange="choice2()" name="classe_id">
                <option value="0">Selecione a sua classe</option>
            @if($acao == 1)
                @foreach ($classes as $classe)
                <option value="{{$classe->id}}"
                @if ((isset($ficha) && $ficha->classe_id==$classe->id)
                    or old('classe_id') == $classe->id) selected @endif>
                        {{$classe->nome}} </option>            
            @endforeach
            @else
                @foreach ($classes as $classe)
                    <option value="{{$classe->id}}">
                        {{$classe->nome}} </option>
                @endforeach
            @endif 
            </select>
            </div>
            <div class="col-md-3">
            <label for="raca">Raça:</label>
            <select class="form-control" id="raca_id" onchange="choice1()" name="raca_id">
            <option value="0">Selecione a sua raça</option>
            @if($acao == 1)
            @foreach ($racas as $raca)
                <option value="{{$raca->id}}"
                @if ((isset($ficha) && $ficha->raca_id == $raca->id)
            or old('raca_id') == $raca->id) selected @endif>
                        {{$raca->nome}}</option>
            @endforeach
            @else
            @foreach ($racas as $raca)
                <option value="{{$raca->id}}">
                        {{$raca->nome}}</option>
            @endforeach
            @endif
            </select>
            </div>
            

            </div>
            <div class="col-md-3">
                <label for="deslocamento">Deslocamento(m):</label>
                <input type="text" class="form-control" id="deslocamento"
                       name="deslocamento"
                       value="{{$ficha->deslocamento or old('deslocamento')}}">
            </div>
            <div class="col-md-2">
                <label for="pontos_vida_total">PV totais:</label>
                <input type="text" class="form-control" id="pontos_vida_total"
                       name="pontos_vida_total"
                       value="{{$ficha->pontos_vida_total or old('pontos_vida_total')}}">
            </div>
            <div class="col-md-2">
                <label for="pontos_vida_temporarios">PV atuais:</label>
                <input disabled type="text" class="form-control" id="pontos_vida_temporarios"
                       name="pontos_vida_temporarios"
                       value="{{$ficha->pontos_vida_temporarios or old('pontos_vida_temporarios')}}">
            </div>
            <div class="col-md-1">
                <input type="button" class="btn btn-danger" value="Dano" id="btDano">
                    <input type="text" class="form-control" id="dano"
                           name="dano">
                </div>   
            <div class="col-md-2">
            <input type="button" class="btn btn-success" value="+" id="btLevel">
                <label for="nivel">Nível:</label>
                <input disabled type="text" class="form-control" id="nivel"
                       name="nivel"
                       value="{{$ficha->nivel or old('nivel')}}">
            </div>
            <div class="col-md-1">
                <label for="bon_proficiencia">Proficiência:</label>
                <input disabled type="text" class="form-control" id="bon_proficiencia"
                       name="bon_proficiencia"
                       value="{{$ficha->bon_proficiencia or old('bon_proficiencia')}}">
            </div>
            <div class="col-md-2">
                <label for="experiencia">Experiência:</label>
                <input disabled type="text" class="form-control" id="experiencia"
                       name="experiencia"
                       value="{{$ficha->experiencia or old('experiencia')}}">
            </div>
            <div class="col-md-2">
            <input type="button" class="btn btn-success" value="Adicionar XP" id="btAddxp">
                <input type="text" class="form-control" id="addXP" value="0">
            </div>
            <!--<div class="col-md-3">
                <label for="idiomas">Idiomas:</label>
                <input type="text" class="form-control" id="idiomas"
                       name="idiomas"
                       value="{{$ficha->idiomas or old('idiomas')}}">
            </div>-->
            <div class="col-md-12">
                <label for="forca">Atributos/Modificadores:</label>
            </div>
            <div class="col-md-1">
                <label for="forca">Força:</label>
                <input type="text" class="form-control" id="forca"
                       name="forca"
                       value="{{$ficha->forca or old('forca')}}">

                       <input type="text" class="form-control" id="modForca"name="modForca">
            </div>
            <div class="col-md-1">
                <label for="destreza">Destreza:</label>
                <input type="text" class="form-control" id="destreza"
                       name="destreza"
                       value="{{$ficha->destreza or old('destreza')}}">
                       <input type="text" class="form-control" id="modDestreza"
                       name="modDestreza">
            </div>
            <div class="col-md-1">
                <label for="inteligencia">Inteligência:</label>
                <input type="text" class="form-control" id="inteligencia"
                       name="inteligencia"
                       value="{{$ficha->inteligencia or old('inteligencia')}}">
                       <input type="text" class="form-control" id="modInteligencia"
                       name="modInteligencia">
            </div>
            <div class="col-md-1">
                <label for="sabedoria">Sabedoria:</label>
                <input type="text" class="form-control" id="sabedoria"
                       name="sabedoria"
                       value="{{$ficha->sabedoria or old('sabedoria')}}">
                       <input type="text" class="form-control" id="modSabedoria"
                       name="modSabedoria">
            </div>
            <div class="col-md-1">
                <label for="carisma">Carisma:</label>
                <input type="text" class="form-control" id="carisma"
                       name="carisma"
                       value="{{$ficha->carisma or old('carisma')}}">
                       <input type="text" class="form-control" id="modCarisma"
                       name="modCarisma">
            </div>
            <div class="col-md-1">
                <label for="constituicao">Constituição:</label>
                <input type="text" class="form-control" id="constituicao"
                       name="constituicao"
                       value="{{$ficha->constituicao or old('constituicao')}}">
                       <input type="text" class="form-control" id="modConstituicao"
                       name="modConstituicao">
            </div>
            <!--<div class="col-md-12">
                <label for="tesouros">Tesouros:</label>
                <input type="text" class="form-control" id="tesouros"
                       name="tesouros"
                       value="{{$ficha->tesouros or old('tesouros')}}">
            </div>-->
            <div class="col-md-12">
                <label for="tesouros">Peças de:</label>
            </div>
            <div class="col-md-2">
                <label for="pcobre">Cobre:</label>
                <input disabled type="text" class="form-control" id="pcobre"
                       name="pcobre"
                       value="{{$ficha->pcobre or old('pcobre')}}">
            </div>
            <div class="col-md-2">
                <label for="pprata">Prata:</label>
                <input disabled type="text" class="form-control" id="pprata"
                       name="pprata"
                       value="{{$ficha->pprata or old('pprata')}}">
            </div>
            <div class="col-md-2">
                <label for="peletron">Eletron:</label>
                <input disabled type="text" class="form-control" id="peletron"
                       name="peletron"
                       value="{{$ficha->peletron or old('peletron')}}">
            </div>
            <div class="col-md-2">
                <label for="pouro">Ouro:</label>
                <input disabled type="text" class="form-control" id="pouro"
                       name="pouro"
                       value="{{$ficha->pouro or old('pouro')}}">
            </div>
            <div class="col-md-2">
                <label for="pplatina">Platina:</label>
                <input disabled type="text" class="form-control" id="pplatina"
                       name="pplatina"
                       value="{{$ficha->pplatina or old('pplatina')}}">
            </div>
            <div class="col-md-12">
            <div class="col-md-4">
            <label for="tesouros">Adicionar Moedas:</label>
            <input type="button" class="btn btn-success" value="Adicionar" id="btMoedas">
            <input type="button" class="btn btn-danger" value="Remover" id="btRmMoedas">
            </div>
            </div>

            <div class="col-md-2">
                <label for="addcobre">Cobre:</label>
                <input type="text" class="form-control" id="addcobre"
                       name="addcobre"
                       value="0">
            </div>
            <div class="col-md-2">
                <label for="addprata">Prata:</label>
                <input type="text" class="form-control" id="addprata"
                       name="addprata"
                       value="0">
            </div>
            <div class="col-md-2">
                <label for="addeletron">Eletron:</label>
                <input type="text" class="form-control" id="addeletron"
                       name="addeletron"
                       value="0">
            </div>
            <div class="col-md-2">
                <label for="addouro">Ouro:</label>
                <input type="text" class="form-control" id="addouro"
                       name="addouro"
                       value="0">
            </div>
            <div class="col-md-2">
                <label for="addplatina">Platina:</label>
                <input type="text" class="form-control" id="addplatina"
                       name="addplatina"
                       value="0">
            </div>
            <div class="col-md-12">
                <label for="magias">Quantidade de Magias:</label>
            </div>
            <div class="col-md-2">
            <input type="button" class="btn btn-success" value="-" id="btMaglvl1">
            <label for="nivel1">Nivel 01:</label>
                <input disabled type="text" class="form-control" id="nivel1"
                       name="nivel1"
                       value="{{$ficha->nivel1 or old('nivel1')}}">
                       </div>
            <div class="col-md-2">
            <input type="button" class="btn btn-success" value="-" id="btMaglvl2">
                <label for="nivel2">Nivel 02:</label>
                <input disabled type="text" class="form-control" id="nivel2"
                       name="nivel2"
                       value="{{$ficha->nivel2 or old('nivel2')}}">
                       </div>
            <div class="col-md-2">
            <input type="button" class="btn btn-success" value="-" id="btMaglvl3">
                <label for="nivel3">Nivel 03:</label>
                <input disabled type="text" class="form-control" id="nivel3"
                       name="nivel3"
                       value="{{$ficha->nivel3 or old('nivel3')}}">
                       </div>
            <div class="col-md-2">
            <input type="button" class="btn btn-success" value="-" id="btMaglvl4">
                <label for="nivel4">Nivel 04:</label>
                <input disabled type="text" class="form-control" id="nivel4"
                       name="nivel4"
                       value="{{$ficha->nivel4 or old('nivel4')}}">
                       </div>
            <div class="col-md-2">
            <input type="button" class="btn btn-success" value="-" id="btMaglvl5">
                <label for="nivel5">Nivel 05:</label>
                <input disabled type="text" class="form-control" id="nivel5"
                       name="nivel5"
                       value="{{$ficha->nivel5 or old('nivel5')}}">
                       </div>
            <div class="col-md-2">
            <input type="button" class="btn btn-success" value="-" id="btMaglvl6">
                <label for="nivel6">Nivel 06:</label>
                <input disabled type="text" class="form-control" id="nivel6"
                       name="nivel6"
                       value="{{$ficha->nivel6 or old('nivel6')}}">
                       </div>
            <div class="col-md-2">
            <input type="button" class="btn btn-success" value="-" id="btMaglvl7">
                <label for="nivel7">Nivel 07:</label>
                <input disabled type="text" class="form-control" id="nivel7"
                       name="nivel7"
                       value="{{$ficha->nivel7 or old('nivel7')}}">
                       </div>
            <div class="col-md-2">
            <input type="button" class="btn btn-success" value="-" id="btMaglvl8">
                <label for="nivel8">Nivel 08:</label>
                <input disabled type="text" class="form-control" id="nivel8"
                       name="nivel8"
                       value="{{$ficha->nivel8 or old('nivel8')}}">
                       </div>
            <div class="col-md-2">
            <input type="button" class="btn btn-success" value="-" id="btMaglvl9">
                <label for="nivel9">Nivel 09:</label>
                <input disabled type="text" class="form-control" id="nivel9"
                       name="nivel9"
                       value="{{$ficha->nivel9 or old('nivel9')}}">
                       </div>
            <!--<div class="form-group col-md-12">
            <label for="talento_id">Talentos:</label>
            <select class="form-control" id="talento_id" name="talento_id">
            @foreach ($talentos as $talento)
                <option value="{{$talento->id}}"
                @if ((isset($reg) && $reg->talento_id==$talento->id)
            or old('talento_id') == $talento->id) selected @endif>
                        {{$talento->nome_tal}}</option>
            @endforeach
            </select>
        </div>-->
        <div class="col-md-12">
                <label for="pericias">Perícias:</label>
            </div>
        <div class="col-md-12">
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckAcro" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="acrobacia">Acrobacia</label>
                <input disabled type="text" class="form-control" id="acrobacia"
                       name="acrobacia">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckArca"  onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="arcanismo">Arcanismo</label>
                <input disabled type="text" class="form-control" id="arcanismo"
                       name="arcanismo">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckAtle" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="atletismo">Atletismo</label>
                <input disabled type="text" class="form-control" id="atletismo"
                       name="atletismo">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckAtua" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="atuacao">Atuação</label>
                <input disabled type="text" class="form-control" id="atuacao"
                       name="atuacao">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckBlef" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="blefar">Blefar</label>
                <input disabled type="text" class="form-control" id="blefar"
                       name="blefar">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckFurt" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="furtividade">Furtividade</label>
                <input disabled type="text" class="form-control" id="furtividade"
                       name="furtividade">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckHist" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="historia">História</label>
                <input disabled type="text" class="form-control" id="historia"
                       name="historia">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckInti" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="intimidacao">Intimidação</label>
                <input disabled type="text" class="form-control" id="intimidacao"
                       name="intimidacao">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckIntu" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="intuicao">Intuição</label>
                <input disabled type="text" class="form-control" id="intuicao"
                       name="intuicao">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckInve" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="investigacao">Investigação</label>
                <input disabled type="text" class="form-control" id="investigacao"
                       name="investigacao">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckLida" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="lidar_animais">Lidar com Animais</label>
                <input disabled type="text" class="form-control" id="lidar_animais"
                       name="lidar_animais">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckMedi" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="medicina">Medicina</label>
                <input disabled type="text" class="form-control" id="medicina"
                       name="medicina">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckNatu" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="natureza">Natureza</label>
                <input disabled type="text" class="form-control" id="natureza"
                       name="natureza">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckPerc" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="percepcao">Percepção</label>
                <input disabled type="text" class="form-control" id="percepcao"
                       name="percepcao">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckPers" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="persuasao">Persuasão</label>
                <input disabled type="text" class="form-control" id="persuasao"
                       name="persuasao">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckPrest" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="presti">Prestidigitação</label>
                <input disabled type="text" class="form-control" id="presti"
                       name="presti">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckReli" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="religiao">Religião</label>
                <input disabled type="text" class="form-control" id="religiao"
                       name="religiao">
            </div>
        <div class="col-md-2">
        <td> <input type="checkbox" id="ckSobr" onclick="calcular()"
                            style="width:15px; height:15px"> </td>
                <label for="sobrevivencia">Sobrevivência</label>
                <input disabled type="text" class="form-control" id="sobrevivencia"
                       name="sobrevivencia">
            </div>
            </div>
            <div class="col-md-12">
                <h3>Personalização</h3>
            </div>
            <div class="col-md-12">
                <label for="aparencia">Aparencia:</label>
                <input type="text" class="form-control" id="aparencia"
                       name="aparencia"
                       value="{{$ficha->aparencia or old('aparencia')}}">
            </div>
            <div class="col-md-12">
                <label for="defeito">Defeitos:</label>
                <input type="text" class="form-control" id="defeito"
                       name="defeito"
                       value="{{$ficha->defeito or old('defeito')}}">
            </div>
            <div class="col-md-12">
                <label for="ligacoes">Ligações:</label>
                <input type="text" class="form-control" id="ligacoes"
                       name="ligacoes"
                       value="{{$ficha->ligacoes or old('ligacoes')}}">
            </div>
            <div class="col-md-12">
                <label for="tracos_personal">Traços de personalidade:</label>
                <input type="text" class="form-control" id="tracos_personal"
                       name="tracos_personal"
                       value="{{$ficha->tracos_personal or old('tracos_personal')}}">
            </div>
            <div class="col-md-12">
                <label for="ideal">Ideal:</label>
                <input type="text" class="form-control" id="ideal"
                       name="ideal"
                       value="{{$ficha->ideal or old('ideal')}}">
            </div>
            <div class="col-md-12">
                <label for="aliados">Aliados:</label>
                <input type="text" class="form-control" id="aliados"
                       name="aliados"
                       value="{{$ficha->aliados or old('aliados')}}">
            </div>
            <div class="col-md-12">
                <label for="historia">História:</label>
                <input type="text" class="form-control" id="historia"
                       name="historia"
                       value="{{$ficha->historia or old('historia')}}">
            </div>
            <div class='col-md-3 buttons'>
                    <button type="submit" class="btn btn-primary">Salvar</button>     
                    <a href="{{ route('fichas.index') }}" class='btn btn-primary' role='button'> Voltar </a>
                    </div>
                    @if ($acao == 0)
                    <input type="hidden" name="user_id" value="{{$user_id}}">        
                    @endif
        </form>
        
</div>

    </div>
    <script src="/js/calculos_ficha.js"></script>
    @if ($acao == 1)
    <script>
    calcular();
    </script>
    @else
    <script>
    iniciaFicha();
    </script>
    
    @endif
</body>

</html>
@endsection
