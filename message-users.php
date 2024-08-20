<?php 
    $co_name = 0;

    if (isset($_GET['applicant'])) {
        $applic = $_GET['applicant'];

        session_start();
        if (isset($_SESSION['company_email'])) {
            $co_mail = $_SESSION['company_email'];

            include 'DB.php';
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

        include 'DB.php';
        $db = new DBhelper();

        $applicant = $_POST['applicant'];
        $name = $_POST['company_name'];
        $title = $_POST['title'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = $db->insert('messages', ['title' => $title, 'applicantId' => $applicant, 'name' => $name, 'email' => $email, 'message' => $message]);

    }

?>
