<?php
include 'db_connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$nic = $_POST['nic'];
$address = $_POST['address'];
$tel_no = $_POST['tel_no'];
$course = $_POST['course'];

$sql = "UPDATE students SET name = '$name', nic = '$nic', address = '$address', tel_no = '$tel_no', course = '$course' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: student_list.php');
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
