<?php

return [
  'app' => [
    'env' => $_ENV['APP_ENV'] ?? 'production',
    'debug' => filter_var($_ENV['APP_DEBUG'] ?? false, FILTER_VALIDATE_BOOLEAN),
    'url' => $_ENV['APP_URL'] ?? 'https://disruptivestudio.com',
  ],

  'mail' => [
    'host' => $_ENV['MAIL_HOST'],
    'port' => (int) $_ENV['MAIL_PORT'],
    'username' => $_ENV['MAIL_USERNAME'],
    'password' => $_ENV['MAIL_PASSWORD'],
    'encryption' => $_ENV['MAIL_ENCRYPTION'],
    'from' => [
      'address' => $_ENV['MAIL_FROM_ADDRESS'],
      'name' => $_ENV['MAIL_FROM_NAME'],
    ],
    'to' => $_ENV['MAIL_TO_ADDRESS'],
  ],

  'recaptcha' => [
    'site_key' => $_ENV['RECAPTCHA_SITE_KEY'],
    'secret_key' => $_ENV['RECAPTCHA_SECRET_KEY'],
    'score_threshold' => (float) ($_ENV['RECAPTCHA_SCORE_THRESHOLD'] ?? 0.5),
  ],

  'languages' => [
    'default' => 'es',
    'available' => ['es', 'en'],
    'names' => [
      'es' => 'Esp',
      'en' => 'Eng'
    ]
  ],
];
