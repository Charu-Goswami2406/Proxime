<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ongoing Projects</title>
    <link rel="stylesheet" href="ongoing.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Add Chart.js -->
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="header-text">
            <h3>Stay updated with the projects we're currently working on</h3>
        </div>
    </header>

    <!-- Hero Section for Background Image -->
    <section id="hero-section"></section>

    <script>
        const images = [
            '../../images/flatimg3.jpg',
            '../../images/flatimg2.jpg',
            '../../images/flatimg1.jpg'
        ];
        let index = 0;

        const heroSection = document.getElementById('hero-section');
        setInterval(() => {
            heroSection.style.backgroundImage = `url('${images[index]}')`;
            index = (index + 1) % images.length;
        }, 2000); // Change every 2 seconds
    </script>

    <!-- Main Content -->
    <main>
        <!-- Ongoing Projects -->
        <section class="projects">
            <?php
            // Database connection
            $servername = "localhost"; 
            $username = "root";        
            $password = "";            
            $dbname = "proxime";       

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch projects from database
            $sql = "SELECT title, description FROM ongoing_project"; 
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

        <!-- Our Work in Cities Section -->
        <section id="our-work-in-cities">
            <!-- Left: Pie Chart -->
            <div class="pie-chart">
                <canvas id="pieChart"></canvas>
            </div>

            <!-- Center: Image Grid -->
            <div class="image-grid">
                <div class="grid">
                    <img src="../../images/img1.jpg" alt="Image 1">
                    <img src="../../images/img3.jpg" alt="Image 2">
                </div>
            </div>

            <!-- Right: Bar Graph -->
            <div class="bar-graph">
                <canvas id="barChart"></canvas>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <div class="footer text-center">
        &copy; 2024 Proxime. All rights reserved.
    </div>

    <!-- JavaScript for Charts -->
    <script>
        // Pie Chart
        const ctxPie = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: ['Flats', 'Villas', 'Commercial', 'Others'],
                datasets: [{
                    data: [40, 30, 20, 10],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                            }
                        }
                    }
                }
            }
        });

        // Bar Chart for Property Trend
        const ctxBar = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Q1', 'Q2', 'Q3', 'Q4'],
                datasets: [{
                    label: 'Property Trend',
                    data: [120, 200, 180, 150],
                    backgroundColor: '#36A2EB',
                    borderColor: '#1e90ff',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return 'Trend: ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
