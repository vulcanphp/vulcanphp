<?php

return [
    // Enable/Disable Mail
    'enabled'        => true,

    // Mail Identity
    'from_email'     => 'contact@domain.net',
    'from_name'      => 'phpAdmin',
    'reply_to_email' => 'reply@domain.net',

    // SMTP Settings
    'smtp_enabled' => false,
    'smtp'         => [
        'host'     => 'sandbox.smtp.mailtrap.io',
        'auth'     => true,
        'port'     => 2525,
        'username' => '{username}',
        'password' => '{password}',
        'secure'   => 'tls',
    ],
];
