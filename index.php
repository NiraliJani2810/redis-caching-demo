<?php
require 'vendor/autoload.php';

$redis = new Predis\Client();
$mysqli = new mysqli("localhost", "root", "", "test_db");

// Caching a query
$key = "users_list";

if ($redis->exists($key)) {
    echo "Fetching from Redis Cache...\n";
    $users = json_decode($redis->get($key), true);
} else {
    echo "Fetching from MySQL...\n";
    $result = $mysqli->query("SELECT id, name, email FROM users LIMIT 10");
    $users = $result->fetch_all(MYSQLI_ASSOC);
    $redis->setex($key, 60, json_encode($users)); // cache for 60s
}

print_r($users);
