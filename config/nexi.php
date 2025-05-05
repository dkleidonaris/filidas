<?php

return [
    'sandbox' => [
        'mid' => env('NEXI_SANDBOX_MID'),
        'url' => env('NEXI_SANDBOX_URL', 'https://alphaecommerce-test.cardlink.gr/vpos/shophandlermpi'),
        'secret' => env('NEXI_SANDBOX_SECRET', 'Cardlink1')
    ],
    'live'
    => [
            'mid' => env('NEXI_LIVE_MID'),
            'url' => env('NEXI_LIVE_URL'),
            'secret' => env('NEXI_LIVE_SECRET')
        ],
    'active_env' => env('NEXI_ENV', 'sandbox'),
];