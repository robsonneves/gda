<?php

$env = $app->detectEnvironment(function()
{
    return [

        getenv('APP_ENV'),
        getenv('APP_DEBUG')

    ];



});