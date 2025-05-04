<?php

return [

    
/*
'paths' => ['api/getList', 'api/getDetails/*'],
'allowed_methods' => ['GET', 'POST'],
'allowed_origins' => ['https://ab3d-110-137-195-138.ngrok-free.app'],
'allowed_origins_patterns' => [],
'allowed_headers' => ['*'],
'exposed_headers' => [],
'max_age' => 0,
'supports_credentials' => true,
*/

'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
