<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '1085595401872-mjcii55dc51jcjhh9tanm97un4i7j3v5.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/google/callback',
    ],
    'facebook' => [
        'client_id' => 'FACEBOOK_CLIENT_ID',
        'client_secret' => 'FACEBOOK_CLIENT_SECRET',
        'redirect' => 'FACEBOOK_REDIRECT_URI',
    ],

    'google' => [
        'client_id' => '1085595401872-mjcii55dc51jcjhh9tanm97un4i7j3v5.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/google/callback',
    ],

    'facebook' => [
        'client_id' => '522263736424591',
        'client_secret' => '5484cc6acb1c245b33e379a1ade87d93',
        'redirect' => 'http://localhost:8000/facebook/callback',
    ],

];
