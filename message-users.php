<?php 
if (isset($_GET['applicant'])) {
    $applic = $_GET['applicant'];

    session_start();
    if (isset($_SESSION['company_email'])) {
        $co_mail = $_SESSION['company_email'];

        include_once 'DB.php';
        $db = new DBhelper();

        $co_name = $db->getData("company", "Company_Name", "email", $co_mail);
    }
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Message Form</title>

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
    <h1>Send a Message</h1>
    <form action="message-users.php" method="post">
        <input type="hidden" name="applicant" value="<?php echo $applic ?>">
        <input type="hidden" name="company_name" value="<?php echo $co_name ?>">
        <input type="hidden" name="email" value="<?php echo $co_mail ?>">

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Send Message">
    </form>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include_once 'DB.php';
    $db = new DBhelper();

    $applicant = $_POST['applicant'];
    $name = $_POST['company_name'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = $db->insert('messages', ['title' => $title, 'applicantId' => $applicant, 'name' => $name, 'email' => $email, 'message' => $message]);

}

?>
