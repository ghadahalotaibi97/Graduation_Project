<?php

$conn = new mysqli('localhost', 'root', '', 'ksatour');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>