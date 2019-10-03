<?php

return [

    'debug' => env('FAWRY_DEBUG', true),

    'merchant_code' => env('FAWRY_MERCHANT_CODE'),

    'security_key' => env('FAWRY_SECURITY_KEY'),

    'path' => 'fawry',

    'user_table' => 'users',

    'user_model' => App\User::class,
];
