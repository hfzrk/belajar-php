<?php
$server = "localhost:25123";
$user = "root";
$pass = "laliwifi";
$db = "forminput";

$connnect = mysqli_connect($server, $user, $pass, $db);

if (!$connnect) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
