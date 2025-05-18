<?php
include 'config.php';
if ($_SESSION['role'] !== 'admin') header("Location: index.php");

$id = $_GET['id'];
$conn->query("DELETE FROM inventory WHERE id=$id");
header("Location: inventory_list.php");
x