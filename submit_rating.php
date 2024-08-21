<?php
// Database connection
include 'db_connection.php';

// Get the the form user id
$user_id = $_POST['id'];

// Validate the data
if (!empty($user_id) && !empty($rating)) {
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
