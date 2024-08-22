<?php
// Database connection
include 'db_connection.php';

// Get the the form user id
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['id'];
    $rating = $_POST['rating'];
}

// Validate the data
if (!empty($rating) && !empty($user_id) ) {
    // Update the specialist's rating
    $sql = "UPDATE specialist SET rate = ? WHERE SpecialistID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $rating, $user_id);

    if ($stmt->execute()) {
        header("Location: company_dashboard.php?msg=rated");
    } else {
        echo "Error updating rating: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Please select a user id and enter a rating.";
}

$conn->close();
?>
