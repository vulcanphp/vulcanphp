<?php

return [
    // pdo driver
    'driver' => 'mysql', // recommended: mysql, sqlite

    // SQLite db filepath (if driver is sqlite)
    'file' => root_dir('/database/main.db'),

    // database charset
    'charset' => 'utf8mb4',
    'collate' => 'utf8mb4_unicode_ci',

    // database configuration
    'name' => 'test',
    'host' => 'localhost',
    'port' => '3306',
    'user' => 'root',
    'password' => '',
];
