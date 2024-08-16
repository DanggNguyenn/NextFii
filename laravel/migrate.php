<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => env('DB_CONNECTION', 'mysql'),
    'host'      => env('DB_HOST', '127.0.0.1'),
    'database'  => env('DB_DATABASE', 'lunch_management'),
    'username'  => env('DB_USERNAME', 'root'),
    'password'  => env('DB_PASSWORD', ''),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

$migrations = [
    '2024_08_05_000000_create_users_table',
    '2024_08_05_000001_create_restaurants_table',
    '2024_08_05_000002_create_meals_table',
    '2024_08_05_000003_create_lunch_requests_table',
    '2024_08_05_000004_create_lunch_choices_table',
];

foreach ($migrations as $migration) {
    $class = new $migration;
    $class->up();
    echo "Migrated: $migration\n";
}
