<?php

use App\Racas;
use App\Classes;
use App\Antecedentes;
use App\Armaduras;
use App\Armas;
use App\Definicoes;
use App\Itens;
use App\Magias;
use App\User;
use Illuminate\Support\Facades\Input;
Route::get('/', 'UserController@home');
Route::get('/pesquisa', 'FichaController@pesq')->name('pesquisa.go');

Route::post('/pesquisa', function () {
return view('users.pesquisa');
});

Route::any('/pesquisa', function () {
    $pesquisa = Input::get('pesquisa');
    if ($pesquisa != "") {
        $defin = Definicoes::where('nome', 'LIKE', '%' . $pesquisa . '%')
            ->orWhere('descricao', 'LIKE', '%' . $pesquisa . '%')->orderBy('nome')->get();
        if (count($defin) > 0) {
            return view('users.pesquisa')->withDetails($defin)->withQuery($pesquisa);
        }
    }
    return view('users.pesquisa')->withMessage("Não achei nada!");
});

Route::resource('users', 'UserController');
Route::resource('admin', 'AdminController');
Route::resource('fichas', 'FichaController');
Route::resource('antecedentes', 'AntecedentesController');
Route::resource('armaduras', 'ArmadurasController');
Route::resource('armas', 'ArmasController');
Route::resource('atributos', 'AtributosController');
Route::resource('caracteristicas', 'CaracteristicasController');
Route::resource('classes', 'ClassesController');
Route::resource('definicoes', 'DefinicoesController');
Route::resource('ficha', 'FichaController');
Route::resource('itens', 'ItensController');
Route::resource('magias', 'MagiasController');
Route::resource('pericias', 'PericiasController');
Route::resource('personalizacao', 'PersonalizacaoController');
Route::resource('proficiencias', 'ProficienciasController');
Route::resource('racas', 'RacasController');
Route::resource('talentos', 'TalentosController');

Auth::routes();

// Social Auth
Route::get('admin/login', 'Auth\LoginAdminController@show')->name('admin.login');
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');
Auth::routes();

Route::get('/save', 'FichaController@salvar')->name('fichas.salvar');

Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/home', function () {
        if (Auth::user()->admin == 0) {
            return view('users.home');
        } else {
            return view('admin.home');
        }
    });

});

Route::post('sair', function () {
    Auth::logout();
    return redirect('/');
})->name('deslogar');
