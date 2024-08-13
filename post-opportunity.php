<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Opportunity</title>
    <link rel="stylesheet" href="styles.css">
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
            <h2>Post a New Opportunity</h2>
            <form method="POST" action="register.php">
                <div class="form-container" >
                    <h3>Or Add a New Opportunity</h3>
                    <div class="form-group">
                        <label for="title" >Title:</label>
                        <input type="text" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="description" >Description:</label>
                        <input type="text" name="descr" id="description">
                        
                    </div>
                    <div class="form-group">
                        <label for="type" >Type:</label>
                        <input type="text" name="type" id="type">
                    </div>
                    <div class="form-group">
                        <label for="requirements" >Requirements:</label>
                        <input type="text" name="requir" id="requirements">
                    </div>
                    <div class="form-group">
                        <label for="start-date" >Start Date:</label>
                        <input type="date"   name="start_date" id="start-date">
                    </div>
                    <div class="form-group">
                        <label for="end-date" >End Date:</label>
                        <input type="date"  name="end_date" id="end-date">
                    </div>
                    <div class="form-group">
                        <label for="application-deadline" >Application Deadline:</label>
                        <input type="date"  name="applica" id="application-deadline">
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
