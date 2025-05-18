<?php
include 'config.php';
if ($_SESSION['role'] !== 'admin') header("Location: index.php");

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM inventory WHERE id=$id");
$item = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $qty = $_POST['quantity'];
    $conn->query("UPDATE inventory SET name='$name', quantity=$qty WHERE id=$id");
    header("Location: inventory_list.php");
}
?>

<form method="POST">
    Name: <input name="name" value="<?= $item['name'] ?>"><br>
    Quantity: <input type="number" name="quantity" value="<?= $item['quantity'] ?>"><br>
    <button type="submit">Update</button>
</form>
