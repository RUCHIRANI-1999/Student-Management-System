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
    <title>Edit Student</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Edit Student</h1>
    <form action="student_edit_process.php" method="POST">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?= $student['name'] ?>" required>
        <label for="nic">NIC:</label>
        <input type="text" name="nic" value="<?= $student['nic'] ?>" required>
        <label for="address">Address:</label>
        <input type="text" name="address" value="<?= $student['address'] ?>">
        <label for="tel_no">Tel. No:</label>
        <input type="text" name="tel_no" value="<?= $student['tel_no'] ?>">
        <label for="course">Course:</label>
        <input type="text" name="course" value="<?= $student['course'] ?>">
        <button type="submit">Update Student</button>
    </form>
</body>
</html>
