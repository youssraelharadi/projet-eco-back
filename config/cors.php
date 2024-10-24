<?php



    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    return [

        'paths' => ['api/*', 'login','sanctum/csrf-cookie'], // Inclure les routes nécessaires
        'allowed_methods' => ['*'], // Autorise toutes les méthodes (GET, POST, etc.)
        'allowed_origins' => ['http://localhost:5173'], // Frontend React
        'allowed_origins_patterns' => [],
        'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization', 'X-CSRF-TOKEN'], // En-têtes autorisés
        'exposed_headers' => [],
        'max_age' => 0,
        'supports_credentials' => true, // Nécessaire pour les cookies avec Sanctum
    ];
    


