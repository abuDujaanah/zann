<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password
$dbname = "zantech"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$user_mail = $_POST['usermail'];
$rating = $_POST['rating'];

// Validate the data
if (!empty($user_mail) && !empty($rating)) {
    // Update the specialist's rating
    $sql = "UPDATE specialist SET rate = ? WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $rating, $user_mail);

    if ($stmt->execute()) {
        header("Location: company_dashboard.php?msg=rated");
    } else {
        echo "Error updating rating: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Please select a usermail and enter a rating.";
}

$conn->close();
?>
