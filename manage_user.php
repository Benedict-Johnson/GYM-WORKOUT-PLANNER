<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'Benedict') {
    header("Location: login.php");
    exit();
}
echo "<h1>Welcome, Admin Benedict!</h1>";
echo "<p>This page allows you to manage users.</p>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['add_user'])) {
        $new_username = $_POST['new_username'];
        $new_password = $_POST['new_password'];
        $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO Users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $new_username, $hashedPassword);

        if ($stmt->execute()) {
            echo "<p>User added successfully.</p>";
        } else {
            echo "<p>Error adding user: " . $stmt->error . "</p>";
        }
        $stmt->close();
    }

    if (isset($_POST['update_user'])) {
        $update_username = $_POST['update_username'];
        $update_password = $_POST['update_password'];
        $hashedPassword = password_hash($update_password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("UPDATE Users SET password = ? WHERE username = ?");
        $stmt->bind_param("ss", $hashedPassword, $update_username);

        if ($stmt->execute()) {
            echo "<p>User updated successfully.</p>";
        } else {
            echo "<p>Error updating user: " . $stmt->error . "</p>";
        }
        $stmt->close();
    }

    if (isset($_POST['delete_user'])) {
        $delete_username = $_POST['delete_username'];

        $stmt = $conn->prepare("DELETE FROM Users WHERE username = ?");
        $stmt->bind_param("s", $delete_username);

        if ($stmt->execute()) {
            echo "<p>User deleted successfully.</p>";
        } else {
            echo "<p>Error deleting user: " . $stmt->error . "</p>";
        }
        $stmt->close();
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <h1>Manage Users</h1>
        <nav>
            <ul>
                <li><a href="index.php">Workouts</a></li>
                <li><a href="nutrition.php">Nutrition</a></li>
                <li><a href="progress.php">Progress</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="manage-user-section">
        <h2>Add New User</h2>
        <form method="POST" action="manage_user.php">
            <label for="new_username">Username:</label>
            <input type="text" id="new_username" name="new_username" required>
            <label for="new_password">Password:</label>
            <input type="password" id="new_password" name="new_password" required>
            <button type="submit" name="add_user">Add User</button>
        </form>
        <br>
        <hr/>
        <br>
        <h2>Update User Password</h2>
        <form method="POST" action="manage_user.php">
            <label for="update_username">Username:</label>
            <input type="text" id="update_username" name="update_username" required>
            <label for="update_password">New Password:</label>
            <input type="password" id="update_password" name="update_password" required>
            <button type="submit" name="update_user">Update User</button>
        </form>
<br>
<hr/>
<br>
        <h2>Delete User</h2>
        <form method="POST" action="manage_user.php">
            <label for="delete_username">Username:</label>
            <input type="text" id="delete_username" name="delete_username" required>
            <button type="submit" name="delete_user">Delete User</button>
        </form>
    </section>
</body>
</html>
