<?php
include 'db_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: student_list.php');
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
