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
  <title>Nutrition</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="header">
    <h1>🏋️ Nutrition Plans</h1>
    <nav>
      <ul>
        <li><a href="index.php">Workouts</a></li>
        <li><a href="progress.php">Progress</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>

  <section class="nutrition-section">
    <center><h2>Daily Meal Plan</h2></center>
    <div id="mealPlan"></div>
  </section>
  <footer class="footer">
      <center><p>&copy; 2024 Gym Assistant</p></center>
    </footer>
  <script src="nutrition.js" defer></script>
</body>
</html>
