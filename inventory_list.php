<?php
include 'config.php';
$role = $_SESSION['role'] ?? null;
$sql = ($role == 'admin') ? 
    "SELECT inventory.*, users.username FROM inventory JOIN users ON inventory.added_by = users.id" : 
    "SELECT * FROM inventory WHERE added_by = ".$_SESSION['userid'];
$result = $conn->query($sql);
?>

<table border="1">
    <tr><th>Name</th><th>Quantity</th><th>Added By</th>
    <?php if ($role == 'admin') echo "<th>Actions</th>"; ?>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['quantity'] ?></td>
        <td><?= $row['username'] ?? '' ?></td>
        <?php if ($role == 'admin'): ?>
        <td>
            <a href="edit_inventory.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete_inventory.php?id=<?= $row['id'] ?>">Delete</a>
        </td>
        <?php endif; ?>
    </tr>
    <?php endwhile; ?>
</table>
