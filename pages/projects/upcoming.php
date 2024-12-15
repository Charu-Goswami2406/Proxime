<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upcoming Projects</title>
  <link rel="stylesheet" href="upcoming.css">
</head>
<body>

<header>
  <h1>Upcoming Projects</h1>
  <p>Discover our future developments and innovative ventures</p>
</header>

<div class="container">
  <?php 
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proxime";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch upcoming projects
    $sql = "SELECT * FROM upcoming_projects ORDER BY expected_completion ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <div class='project-card'>
              <h3 class='project-title'>" . htmlspecialchars($row['title']) . "</h3>
              <div class='project-info'>
                <p class='project-description'>" . htmlspecialchars($row['description']) . "</p>
                <p class='project-timeline'>Expected Completion: " . htmlspecialchars($row['expected_completion']) . "</p>
              </div>
            </div>
            ";
        }
    } else {
        echo "No upcoming projects found.";
    }

    $conn->close();
  ?>
</div>

<!-- Footer -->
<div class="footer text-center">
  &copy; 2024 Proxime. All rights reserved.
</div>

</body>
</html>
