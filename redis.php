<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once __DIR__ . '/vendor/autoload.php';

if (!function_exists('getRedisClient')) {
    function getRedisClient(): Predis\Client
    {
        static $redis = null;

        if ($redis instanceof Predis\Client) {
            return $redis;
        }

        $env = parse_ini_file(__DIR__ . '/.env', false, INI_SCANNER_RAW);

        $redis = new Predis\Client([
            'host' => $env['REDIS_HOST'],
            'port' => $env['REDIS_PORT'],
            'password' => $env['REDIS_PASSWORD'],
            'database' => $env['REDIS_DATABASE'] ?? 0,
        ]);

        return $redis;
    }
}

$redis = getRedisClient();