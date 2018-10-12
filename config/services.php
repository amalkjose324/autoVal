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

    'twitter'=>[
        'client_id'=>'t9iqFV6o9dAsByeQ92WxunCql',
        'client_secret'=>'Ys4MwxtNhSkFU2AkJxR0Yk4zkbKDwR669v2JkUygGrKKfXgw1o',
        'redirect' =>'http://127.0.0.1:8000/login/twitter/callback'

    ],
    'google'=>[
        'client_id'=>'529799728722-m259jurjn8elkifgbicjk40099n29tms.apps.googleusercontent.com',
        'client_secret'=>'WNpRDqARFB_jQ7krkARaQ4Oi',
        'redirect' =>'http://127.0.0.1:8000/login/google/callback'

    ],
    'facebook'=>[
        'client_id'=>'311833339610853',
        'client_secret'=>'eeedad9a789db7dad48bee19eb7a004e',
        'redirect' =>'http://127.0.0.1:8000/login/facebook/callback'

    ],
    'linkedin'=>[
        'client_id'=>'86p4ij8f37zv73',
        'client_secret'=>'AcAcq3p9tFj5Lt4x',
        'redirect' =>'http://127.0.0.1:8000/login/linkedin/callback'

    ],
    'github'=>[
        'client_id'=>'3e95da2a5633777cfa8b',
        'client_secret'=>'4aede1c5429de1c8201a9339e1ab6941970fccea',
        'redirect' =>'http://127.0.0.1:8000/login/github/callback'

    ],

];
