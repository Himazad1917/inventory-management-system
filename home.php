<?php
include 'config.php';
if ($_SESSION['role'] !== 'user') {
    header("Location: index.php");
}
?>

<h2>Welcome, <?= $_SESSION['username'] ?></h2>
<a href="add_inventory.php">Add Inventory</a> | 
<a href="inventory_list.php">View Inventory</a> | 
<a href="logout.php">Logout</a>
