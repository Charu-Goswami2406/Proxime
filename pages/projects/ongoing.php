<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ongoing Projects</title>
    <link rel="stylesheet" href="ongoing.css">
</head>
<body>
    <header>
        <h1>Ongoing Projects</h1>
        <p>Stay updated with the projects we're currently working on.</p>
    </header>
    <main>
        <section class="projects">
            <?php
            // Database connection
            $servername = "localhost"; // Replace with your database server
            $username = "root";        // Replace with your database username
            $password = "";            // Replace with your database password
            $dbname = "proxime";   // Replace with your database name

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch projects from database
            $sql = "SELECT title, description FROM ongoing_projects"; // Replace 'projects' with your table name
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output each project
                while ($row = $result->fetch_assoc()) {
                    echo "<article class='project'>";
                    echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
                    echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                    echo "</article>";
                }
            } else {
                echo "<p>No ongoing projects found.</p>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </section>
    </main>
    <!-- Footer -->
    <div class="footer text-center">
        &copy; 2024 Proxime. All rights reserved.
    </div>
</body>
</html>
