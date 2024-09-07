<?php



return [

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

'paths' => ['api/*'], // This enables CORS for your API routes

'allowed_methods' => ['*'], // You can restrict allowed methods (GET, POST, etc.) if necessary

'allowed_origins' => ['http://localhost:3000'], // Vite dev server URL

'allowed_origins_patterns' => [],

'allowed_headers' => ['*'], // Accept all headers, or restrict as needed

'exposed_headers' => [],

'max_age' => 0,

'supports_credentials' => false, // Set to true if your requests need credentials (e.g., cookies, sessions)

/*
|--------------------------------------------------------------------------
| Access-Control-Allow-Origin Response Header
|--------------------------------------------------------------------------
|
| If `supports_credentials` is set to `true`, the `allowed_origins` option
| must not contain a wildcard (*). If you set a wildcard, requests that
| require credentials will fail.
|
*/

];
