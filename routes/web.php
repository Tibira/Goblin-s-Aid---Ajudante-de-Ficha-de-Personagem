<?php
    Route::get('/','UserController@home');
    Route::get('/wsMagia/{id}','MagiasController@ws');
    Route::resource('users', 'UserController');
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
    Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
    Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
    Route::get('oauth/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');
    Auth::routes();
    
    Route::get('/home', 'HomeController@index')->name('home');
    