<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit();
}
include 'db_connect.php';

$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Student List</h1>
    <button onclick="window.location.href='student_add.php'">Add Student</button>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>NIC</th>
            <th>Course</th>
            <th>Options</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['nic'] ?></td>
            <td><?= $row['course'] ?></td>
            <td>
                <button onclick="window.location.href='student_view.php?id=<?= $row['id'] ?>'">View</button>
                <button onclick="window.location.href='student_edit.php?id=<?= $row['id'] ?>'">Edit</button>
                <button onclick="window.location.href='student_delete.php?id=<?= $row['id'] ?>'">Delete</button>
                <!-- <form method="POST" action="student_delete.php" onsubmit="return confirm('Are you sure?');">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <button type="submit">Delete</button>
                </form> -->
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
