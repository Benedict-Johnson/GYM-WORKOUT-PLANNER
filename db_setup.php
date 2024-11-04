<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tableSql = "CREATE TABLE IF NOT EXISTS Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";
$conn->query($tableSql);

$users = [["Benedict", "password123"], ["Ezhil", "securepass"], ["test_user", "mypassword"]];
$insertSql = $conn->prepare("INSERT IGNORE INTO Users (username, password) VALUES (?, ?)");

foreach ($users as $user) {
    $username = $user[0];
    $hashedPassword = password_hash($user[1], PASSWORD_DEFAULT);
    $insertSql->bind_param("ss", $username, $hashedPassword);
    $insertSql->execute();
}

$insertSql->close();
$conn->close();

echo "Database setup complete.";
?>
