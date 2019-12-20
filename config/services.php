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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => '738970203247425',
        'client_secret' => 'd0d52011fb8bfa602171c3e0aeda0ed7',
        'redirect' => 'http://localhost:8080/BookStore/public/facebook/callback'
    ],
    'google' => [
        'client_id' => '674686055526-s6tdg180dmtfc3bui4bholr1edav9ea5.apps.googleusercontent.com',
        'client_secret' => '_nBT-xBMV6ls9obvRlzslvlr',
        'redirect' => 'http://localhost:8080/BookStore/public/google/callback'
    ]

];
