<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */
    'migrations' => 'migrations',
    'connections' => [

        'mysql' => [
            'driver'        => 'mysql',
            'host'          => env('DB_HOST', 'remotemysql.com'),
            'port'          => env('DB_PORT', '3306'),
            'database'      => env('DB_DATABASE', '1PpHofpOUL'),
            'username'      => env('DB_USERNAME', '1PpHofpOUL'),
            'password'      => env('DB_PASSWORD', 'MuYoOFwEPy'),
            // 'unix_socket'   => env('DB_SOCKET', ''),
            // 'charset'       => env('DB_CHARSET', 'utf8'),
            // 'collation'     => env('DB_COLLATION', 'utf8_unicode_ci'),
            // 'prefix'        => env('DB_PREFIX', ''),
            // 'strict'        => env('DB_STRICT_MODE', false),
            // 'engine'        => env('DB_ENGINE', null),
            // 'timezone'      => env('DB_TIMEZONE', '+00:00'),
        ],

        'sqlsrv' => [
            'driver'        => 'sqlsrv',
            'host'          => env('DB_HOST1', null),
            'port'          => env('DB_PORT1', null),
            'database'      => env('DB_DATABASE1', null),
            'username'      => env('DB_USERNAME1', null),
            'password'      => env('DB_PASSWORD1', null),
            'charset'       => env('DB_CHARSET', 'utf8'),
            'prefix'        => env('DB_PREFIX', ''),
        ],

        'sqlsrv_ho' => [
            'driver'        => 'sqlsrv',
            'host'          => env('DB_HOST2', null),
            'port'          => env('DB_PORT2', null),
            'database'      => env('DB_DATABASE2', null),
            'username'      => env('DB_USERNAME2', null),
            'password'      => env('DB_PASSWORD2', null),
            'charset'       => env('DB_CHARSET', 'utf8'),
            'prefix'        => env('DB_PREFIX', ''),
        ],

        'testing' => [
            'driver'        => 'sqlite',
            'database'      => ':memory:',
            'host'          => database_path('testing.sqlite'),
            'prefix'        => env('DB_PREFIX', ''),
        ],
    ],

];
