<?php

$conn = new mysqli('mysql', 'docker', 'secret', 'docker', 3306);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

echo 'Connected successfully: ' . $conn->host_info;