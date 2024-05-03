<?php

$conn = new mysqli('localhost', 'root', '', 'wordphp');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>