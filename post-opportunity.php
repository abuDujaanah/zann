<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zantech";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect form data
    $title = $_POST['title'];
    $description = $_POST['descr'];
    $type = $_POST['type'];
    $requirements = $_POST['requir'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $applicationDeadline = $_POST['applica'];

    // update error handling
    $query = "INSERT INTO opportunity (title, description, type, requirements, start_date, end_date, application_deadline) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);

    if ($stmt === false) {
        die("Failed to prepare statement: " . $conn->error);
    }

    $stmt->bind_param("sssssss", $title, $description, $type, $requirements, $startDate, $endDate, $applicationDeadline);


    // Execute the statement
    if ($stmt->execute()) {
        echo "Opportunity posted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Opportunity</title>
    <style>
    .sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #004d00;
        padding-top: 20px;
    }
    .sidebar a {
        padding: 10px 15px;
        text-decoration: none;
        font-size: 18px;
        color: white;
        display: block;
    }
    .sidebar a:hover {
        background-color: #003300;
    }
    .content {
        margin-left: 260px;
        padding: 20px;
        width: calc(100% - 260px);
    }
    .card {
        background-color: white;
        border: 1px solid #004d00;
        border-radius: 8px;
        margin: 10px 0;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card h2 {
        color: #004d00;
        margin-top: 0;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        color: #004d00;
        margin-bottom: 5px;
    }
    .form-group input, .form-group select, .form-group textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #004d00;
        border-radius: 4px;
    }
    .form-group button {
        background-color: #004d00;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .form-group button:hover {
        background-color: #003300;
    }
    .form-container {
        width: 60%;
        margin: 0 auto;
    }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="index.php">Home</a>
        <a href="post-opportunity.php">Post Opportunity</a>
        <a href="view-applications.php">View Applications</a>
        <a href="rate-users.php">Rate Users</a>
        <a href="message-users.php">Message Users</a>
    </div>

    <div class="content">
        <div class="card">
            <h2>Post a New Opportunity</h2>
            <form method="POST" action="">
                <div class="form-container">
                    <h3>Or Add a New Opportunity</h3>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" name="descr" id="description" required>
                    </div>
                    <div class="form-group">
                        <label for="type">Type:</label>
                        <input type="text" name="type" id="type" required>
                    </div>
                    <div class="form-group">
                        <label for="requirements">Requirements:</label>
                        <input type="text" name="requir" id="requirements" required>
                    </div>
                    <div class="form-group">
                        <label for="start-date">Start Date:</label>
                        <input type="date" name="start_date" id="start-date" required>
                    </div>
                    <div class="form-group">
                        <label for="end-date">End Date:</label>
                        <input type="date" name="end_date" id="end-date" required>
                    </div>
                    <div class="form-group">
                        <label for="application-deadline">Application Deadline:</label>
                        <input type="date" name="applica" id="application-deadline" required>
                    </div>
                    <div class="form-group">
                        <button class="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
