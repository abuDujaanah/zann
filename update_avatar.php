<form action="update_avatar.php" method="POST" enctype="multipart/form-data">
    <label for="avatar">Update Avatar:</label>
    <input type="file" name="avatar" id="avatar" accept="image/*" required>
    <button type="submit">Update</button>
</form>

<?php

// Include database connection
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if a file was uploaded
    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
        // Define the target directory for uploads
        $targetDir = "uploads/";
        
        // Generate a unique name for the new file
        $fileName = uniqid() . '_' . basename($_FILES['avatar']['name']);
        $targetFilePath = $targetDir . $fileName;

        // Check if the directory exists, if not, create it
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        // Fetch the current avatar path from the database
        $sql = "SELECT avatar_path FROM company WHERE CompanyID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $companyId); // Assuming $companyId is defined
        $stmt->execute();
        $stmt->bind_result($currentAvatarPath);
        $stmt->fetch();
        $stmt->close();

        // Delete the old avatar if it exists
        if (file_exists($currentAvatarPath)) {
            unlink($currentAvatarPath);
        }

        // Move the new uploaded file to the target directory
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFilePath)) {
            // Update the database with the new file path
            $sql = "UPDATE company SET avatar_path = ? WHERE CompanyID = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('si', $targetFilePath, $companyId);

            if ($stmt->execute()) {
                echo "Avatar updated successfully!";
            } else {
                echo "Database error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error uploading the new file.";
        }
    } else {
        echo "No file uploaded or file upload error.";
    }
}

// Close the database connection
$conn->close();
?>
