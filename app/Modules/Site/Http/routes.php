<?php

Route::resource('social','SocialController');


Route::group(['prefix' => 'uploads'] , function()
{
    Route::get('',                   ['as' => 'uploads.index',  'uses' => 'UploadController@index']    );
    Route::get('novo/{ficha}/{inc}', ['as' => 'uploads.create', 'uses' => 'UploadController@create']   );
    Route::get('show/{id}',          ['as' => 'uploads.show',   'uses' => 'UploadController@show']     );
    Route::post('inserir',           ['as' => 'uploads.store',  'uses' => 'UploadController@store']    );
    Route::get('excluir/{id}',       ['as' => 'uploads.destroy','uses' => 'UploadController@destroy']   );
});

Route::group(['prefix' => 'contato'] , function()
{
    Route::get('',          ['as' => 'contato.index',  'uses' => 'ContatoController@index']    );
    Route::post('enviar',   ['as' => 'contato.send',   'uses' => 'ContatoController@send']      );
});













