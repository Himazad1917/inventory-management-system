<?php
$conn = new mysqli("localhost", "root", "", "inventory_system");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
?>
