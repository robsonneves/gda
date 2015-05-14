<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => 'sandbox6358f8860479455d8fe085013ca52909.mailgun.org',
		'secret' => 'key-e69b6cf418ad38680b614b822223ed49',
	],

	'mandrill' => [
		'secret' => 'dahlfsvl1EKKJ_2PUQJUXg',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],

    'github' => [
        'client_id' => 'ae70bb259b09681964ed',
        'client_secret' => 'b303cc795664820fe79b2ecb16f7b7d7cd3ee4a7',
        'redirect' => 'http://gda.app/auth/callback',
    ],

    'facebook' => [
        'client_id' => '818042721621585',
        'client_secret' => '9fa8f24f3ac07fc1d182f0ed9b8286ad',
        'redirect' => 'http://gda.app/auth/callback',
    ],

    'google' => [
        'client_id' => '25505335961-tm1iipqq9u60hpmt1nipl3o1osv8vudi.apps.googleusercontent.com',
        'client_secret' => '1_slVRqvXzvepRQLlE7Z8W6d',
        'redirect' => 'http://www.gda.com.br/auth/callback/',
    ],

];
