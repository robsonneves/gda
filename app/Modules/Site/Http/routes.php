<?php

//Route::resource('social','SocialController');

Route::group(['prefix' => 'social'] , function()
{
    Route::get('',              ['as' => 'social.index',     'uses' => 'SocialController@index']        );
    Route::get('all',           ['as' => 'social.all',       'uses' => 'SocialController@all']          );
    Route::get('active/{id}',   ['as' => 'social.active',    'uses' => 'SocialController@active']       );
    Route::delete('delete/{id}',['as' => 'social.destroy',   'uses' => 'SocialController@destroy']      );
});

Route::group(['prefix' => 'uploads'] , function()
{
    Route::get('',                   ['as' => 'uploads.index',  'uses' => 'UploadController@index']    );
    Route::get('novo/{ficha}/{inc}', ['as' => 'uploads.create', 'uses' => 'UploadController@create']   );
    Route::get('show/{id}',          ['as' => 'uploads.show',   'uses' => 'UploadController@show']     );
    Route::post('inserir',           ['as' => 'uploads.store',  'uses' => 'UploadController@store']    );
    Route::delete('excluir/{id}',    ['as' => 'uploads.destroy','uses' => 'UploadController@destroy']  );
});

Route::group(['prefix' => 'contato'] , function()
{
    Route::get('',          ['as' => 'contato.index',  'uses' => 'ContatoController@index']     );
    Route::post('enviar',   ['as' => 'contato.send',   'uses' => 'ContatoController@send']      );
});

Route::group(['prefix' => 'services'] , function()
{
    Route::get('terms',         ['as' => 'service.terms',    'uses' => 'ServiceController@terms']    );
    Route::get('policy',        ['as' => 'service.policy',   'uses' => 'ServiceController@policy']   );
});














