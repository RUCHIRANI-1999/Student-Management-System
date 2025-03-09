<?php
session_start();

// If the user is logged in, redirect to the student list
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: student_list.php');
    exit();
} else {
    // If the user is not logged in, redirect to the login page
    header('Location: login.php');
    exit();
}
?>
