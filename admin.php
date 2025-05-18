<?php
include 'config.php';
if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php");
}
?>

<h2>Admin Dashboard</h2>
<a href="add_inventory.php">Add Inventory</a> | 
<a href="inventory_list.php">Manage Inventory</a> | 
<a href="logout.php">Logout</a>
