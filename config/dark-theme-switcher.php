<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Local storage key
    |--------------------------------------------------------------------------
    |
    | This value is the name of the local storage key, which will be used for
    | storing information about which theme to use.
    |
    */

    'local_storage_key' => env('DARK_THEME_SWITCHER_LOCAL_STORAGE_KEY', 'dark-mode'),

    /*
    |--------------------------------------------------------------------------
    | Dark theme trigger class
    |--------------------------------------------------------------------------
    |
    | This value is the name of the class, which will be used to add to `html`
    |
    */

    'class' => env('DARK_THEME_SWITCHER_CLASS', 'dark'),
];
