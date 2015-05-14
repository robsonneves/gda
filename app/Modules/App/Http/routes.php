<?php

Route::controller('arquivo','ArquivoController');


Route::get('install', function(){

   $configs = [ 'APP_ENV'       => 'local',
                'APP_DEBUG'     => 'true',
                'APP_KEY'       => 'SomeRandomString',

                'DB_HOST'       => 'localhost',
                'DB_DATABASE'   => 'dev_gda',
                'DB_USERNAME'   => 'root',
                'DB_PASSWORD'   => '123456',

                'CACHE_DRIVER'  => 'redis',
                'SESSION_DRIVER'=> 'file',
                'QUEUE_DRIVER'  => 'database',

                'MAIL_DRIVER'   => 'mailgun',
                'MAIL_HOST'     => '',
                'MAIL_PORT'     => '587',
                'MAIL_USERNAME' => 'postmaster@sandbox6358f8860479455d8fe085013ca52909.mailgun.org',
                'MAIL_PASSWORD' => 'cyber10',

                'LOGIN'         => 'null'
   ];

    $env = fopen(base_path('.env'), 'w');

    foreach($configs as $key => $c){
        fwrite($env, $key."=".$c."\r\n" );
    }
    fclose($env);


});



