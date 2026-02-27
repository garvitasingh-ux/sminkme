<?php
$conn = new mysqli("localhost", "root", "", "smikme",3307);

if ($conn->connect_error) {
    die("Database connection failed");
}
?>
