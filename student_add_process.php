<?php
include 'db_connect.php';

$name = $_POST['name'];
$nic = $_POST['nic'];
$address = $_POST['address'];
$tel_no = $_POST['tel_no'];
$course = $_POST['course'];

$sql = "INSERT INTO students (name, nic, address, tel_no, course) VALUES ('$name', '$nic', '$address', '$tel_no', '$course')";

if ($conn->query($sql) === TRUE) {
    header('Location: student_list.php');
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
