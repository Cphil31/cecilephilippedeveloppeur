<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('cecilephilippe.developpeur.com'),
        'secret' => env('k=rsa; p=MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDVzLxa3AQPay/i5JGOwlIpKOC7ERixbYOqV+Dg1ClbWaUVTvTeaz/LUrSEKlPEWqmM6v51gvDa9vQkemjCkXpFH3zBGOSg/cwf2CLNdifhKF3/scodCPH84wFoUZtXO+sNQOG7OBo74lvL5VQP3btG5EKAAjsQhZgaeI5h49GpFwIDAQAB'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
