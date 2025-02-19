<?php
$server = "localhost:25123";
$user = "root";
$pass = "laliwifi";
$db = "forminput";

$connnect = mysqli_connect($server, $user, $pass, $db);

if (!$connnect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Measure ping duration in milliseconds
$start = microtime(true);
$duration = (microtime(true) - $start) * 1000;
if (mysqli_ping($connnect)) {
    echo "Server terhubung, Ping " . round($duration, 2) . "ms. ";
} else {
    echo "Ping failed. " . round($duration, 2) . "ms. ";
}

