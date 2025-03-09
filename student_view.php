<?php
include 'db_connect.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id = $id");
$student = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Student</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>View Student</h1>
    <p>ID: <?= $student['id'] ?></p>
    <p>Name: <?= $student['name'] ?></p>
    <p>NIC: <?= $student['nic'] ?></p>
    <p>Address: <?= $student['address'] ?></p>
    <p>Tel. No: <?= $student['tel_no'] ?></p>
    <p>Course: <?= $student['course'] ?></p>
    <button onclick="window.location.href='student_edit.php?id=<?= $student['id'] ?>'">Edit</button>
    <button onclick="window.location.href='student_delete.php?id=<?= $student['id'] ?>'">Delete</button>
</body>
</html>
