<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
 */

	'mailgun' => [
		'domain' => env('MAILGUN_DOMAIN'),
		'secret' => env('MAILGUN_SECRET'),
	],

	'ses' => [
		'key' => env('SES_KEY'),
		'secret' => env('SES_SECRET'),
		'region' => env('SES_REGION', 'us-east-1'),
	],

	'sparkpost' => [
		'secret' => env('SPARKPOST_SECRET'),
	],

	'stripe' => [
		'model' => App\User::class,
		'key' => env('STRIPE_KEY'),
		'secret' => env('STRIPE_SECRET'),
	],

	'facebook' => [
		'client_id' => '2205483573042752',
		'client_secret' => 'afeef1f2a8be03f5ca1039ba96a6cec0',
		'redirect' => 'http://localhost:8000/redirect/facebook/callback',
	],

	'twitter' => [
		'client_id' => '2205483573042752',
		'client_secret' => 'afeef1f2a8be03f5ca1039ba96a6cec0',
		'redirect' => 'http://localhost:8000/redirect/facebook/callback',
	],

	'google' => [
		'client_id' => '783545714204-15si9th2g283pvqbd390qjr4t22ks0ka.apps.googleusercontent.com',
		'client_secret' => 'e0teXukS86qlhnIl1MN_d40l',
		'redirect' => 'http://localhost:8000/redirect/google/callback',
	]

];
