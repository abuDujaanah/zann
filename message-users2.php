<?php

    if (isset($_GET['applicant'])) {

        $applicantID = $_GET['applicant'];
        
        include_once 'DB.php';
        $db = new DBHelper();

        ?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Users</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
        }
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
            width: 60%; /* Set the width of the form container */
            margin: 0 auto; /* Center the form container */
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
            <h2>Message Users</h2>
            <div>
                <form action="message-users.php" method="POST">
                    <label for="message-title">Message Title:</label>
                    <input type="text" id="message-title" name="title" value="Application Results">

                    <hr>

                    <label for="message-content">Message:</label>
                    <br>
                    <textarea id="message-content" name="message-content" style="height: 100px; width: 800px;"></textarea>

                    <br>
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

        <?php

    } else {
        // Handle the case where the 'applicant' parameter is not present in the URL
        echo "No applicant ID provided.";
    }

?>
