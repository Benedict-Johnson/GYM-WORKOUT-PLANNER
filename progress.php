<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Progress</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="App">
    <header class="header">
      <h1>🏋️ Workout Planner</h1>
      <nav>
        <ul>
          <li><a href="index.php">Workouts</a></li>
          <li><a href="nutrition.php">Nutrition</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </header>

    <section class="progress-section">
      <center><h2>Your Progress</h2></center>
      <table class="progress-table">
        <thead>
          <tr>
            <th>Category</th>
            <th>Current</th>
            <th>Goal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Weight</td>
            <td>75kg</td>
            <td>70kg</td>
          </tr>
          <tr>
            <td>Body Fat</td>
            <td>18%</td>
            <td>12%</td>
          </tr>
          <tr>
            <td>Workout Frequency</td>
            <td>4 Days/Week</td>
            <td>5 Days/Week</td>
          </tr>
        </tbody>
      </table>
    </section>

    <footer class="footer">
      <p>&copy; 2024 Gym Assistant</p>
    </footer>
  </div>
  <script src="progress.js" defer></script>
</body>
</html>
