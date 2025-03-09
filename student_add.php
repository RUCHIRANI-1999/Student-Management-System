<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Add Student</h1>
    <form action="student_add_process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="nic">NIC:</label>
        <input type="text" name="nic" required>
        <label for="address">Address:</label>
        <input type="text" name="address">
        <label for="tel_no">Tel. No:</label>
        <input type="text" name="tel_no">
        <label for="course">Course:</label>
        <input type="text" name="course">
        <button type="submit">Add Student</button>
    </form>
</body>
</html>

