<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Debug option
    |--------------------------------------------------------------------------
    | Accept boolean value , and toggle between the production endpoint and sandbox
    */

    'debug' => env('FAWRY_DEBUG', true),

    /*
    |--------------------------------------------------------------------------
    | Fawry Keys
    |--------------------------------------------------------------------------
    |
    | The Fawry publishable key and secret key give you access to Fawry's
    | API.
    */

    'merchant_code' => env('FAWRY_MERCHANT_CODE'),

    'security_key' => env('FAWRY_SECURITY_KEY'),

    'users_table' => 'users',

    'user_model' => App\User::class,

];
