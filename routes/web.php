<?php

Route::get('/', 'UserController@home');
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
