<?php

Route::group(array('prefix' => 'api//v1'), function()
{
    Route::get('listprocess/{id}',array('uses' => 'ApiController@showProfile'))->where('id', '[0-9]+');

});

Route::group(array('prefix' => 'api/site/v1'), function()
{
    Route::get('showListProcess',   array('uses' => 'ApiSiteController@showListProcess'));
    Route::get('showSocialProfile', array('uses' => 'ApiSiteController@showSocialProfile'));

    Route::get('showSocialRecents/{qtd}',array('uses' => 'ApiSiteController@showSocialRecents'));
    Route::get('showTramitacoes/{id}',array('uses' => 'ApiSiteController@showTramitacoes'));

});
