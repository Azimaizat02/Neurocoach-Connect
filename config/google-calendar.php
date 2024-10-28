<?php

return [

    'client_id' => env('GOOGLE_CALENDAR_CLIENT_ID'),
    'client_secret' => env('GOOGLE_CALENDAR_CLIENT_SECRET'),
    'redirect_uri' => env('GOOGLE_CALENDAR_REDIRECT_URI'),

    'auth_profiles' => [
        'oauth' => [
            'credentials_json' => storage_path('app/google-calendar/oauth-credentials.json'),
            'token_json' => storage_path('app/google-calendar/oauth-token.json'),
        ],
    ],
];
