<?php
// Hardcoded credentials for demonstration purposes
$valid_user = 'admin';  // Hardcoded username
$valid_pass = '123456'; // Hardcoded password

if ($_POST['username'] == $valid_user && $_POST['password'] == $valid_pass) {
    session_start();
    $_SESSION['logged_in'] = true; // Set session for login state
    header('Location: student_list.php'); // Redirect to student list
    exit();
} else {
    echo "Invalid username or password. <a href='login.php'>Try again</a>";
}
?>
