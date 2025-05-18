<?php
include 'config.php';
if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $qty = $_POST['quantity'];
    $uid = $_SESSION['userid'];
    $stmt = $conn->prepare("INSERT INTO inventory (name, quantity, added_by) VALUES (?, ?, ?)");
    $stmt->bind_param("sii", $name, $qty, $uid);
    $stmt->execute();
    header("Location: inventory_list.php");
}
?>

<form method="POST">
    Name: <input name="name"><br>
    Quantity: <input type="number" name="quantity"><br>
    <button type="submit">Add</button>
</form>
