<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Workout Plans</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="header">
    <h1>🏋️ Workout Planner</h1>
    <nav>
      <ul>
        <li><a href="nutrition.php">Nutrition</a></li>
        <li><a href="progress.php">Progress</a></li>
        <li><a href="manage_user.php">Manage Users</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>

  <section class="workout-list">
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Here are your workout plans...</p>
    <ul id="workoutItems" class="workout-items"></ul>
  </section>
  <footer class="footer">
      <center><p>&copy; 2024 Gym Assistant</p><center>
    </footer>
  <script src="index.js" defer></script>

</body>
</html>
