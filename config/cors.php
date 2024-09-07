<?php



return [

    'paths' => ['api/*', 'posts'], // Allow API routes and specific routes like 'posts'

    'allowed_methods' => ['*'], // Allow all HTTP methods (GET, POST, PUT, etc.)

    'allowed_origins' => ['http://localhost:8000'], // Allow requests from the Vite dev server

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // Accept all headers or restrict as needed

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true, // Set to true if using credentials like cookies
];
