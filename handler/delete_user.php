<?php
require_once('../dbconfig.php');

if (isset($_GET['id'])) {
    $user_id = intval($_GET['id']); 

    if ($user_id > 0) {
        $stmt = $conn->prepare("DELETE FROM user WHERE user_id = ?");
        
        if ($stmt === false) {
            // Debugging: SQL prepare statement error
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("i", $user_id);

        if ($stmt->execute()) {
            // Success: Redirect after deletion
            header("Location: it_specialist_dashboard.php?status=success");
            exit();
        } else {
            // Debugging: Execution error
            die('Execute failed: ' . htmlspecialchars($stmt->error));
            header("Location: it_specialist_dashboard.php?status=error");
            exit();
        }

        $stmt->close();
    } else {
        // Debugging: Invalid user ID
        die('Invalid user ID provided.');
        header("Location: it_specialist_dashboard.php?status=invalid");
        exit();
    }
} else {
    // Debugging: ID not set in the request
    die('User ID not set in the request.');
    header("Location: it_specialist_dashboard.php?status=missing_id");
    exit();
}

$conn->close();
?>
