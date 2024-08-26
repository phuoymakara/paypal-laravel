<?php

return [
    'mode' => env('PAYPAL_MODE','sandbox'),
    'sandbox' => [
        'client_id' => env('PAYPAL_SANDBOX_CLIENT_ID',''),
        'client_secret' => env('PAYPAL_SANDBOX_CLIENT_SECRET',''),
        'app_id' => 'base64:i7TsUDCUpE9GXVDw6bpfJtE6lZ3+a1sRJAgrR5/2wCg='
    ],
    'payment_action' => 'Sale',
    'currency' => 'USD',
    'notify_url' => '',
    'locale' => 'en_US',
    'validate_ssl' => false,
];
