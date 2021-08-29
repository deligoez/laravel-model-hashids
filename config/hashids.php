<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Salt for Hash ID
    |--------------------------------------------------------------------------
    |
    | Salt string.
    |
    */

    'salt' => env('HASHID_SALT', 'your-secret-salt-string'),

    /*
    |--------------------------------------------------------------------------
    | HashID Lenght
    |--------------------------------------------------------------------------
    |
    | HashID Lenght
    |
    */

    'length' => 13,

    /*
    |--------------------------------------------------------------------------
    | HashID Alphabet
    |--------------------------------------------------------------------------
    |
    | HashID Alphabet
    |
    */

    'alphabet' => 'abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890',
];
