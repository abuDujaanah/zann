<form action="upload_avatar.php" method="POST" enctype="multipart/form-data">
    <label for="avatar">Upload Avatar:</label>
    <input type="file" name="avatar" id="avatar" accept="image/*" required>
    <button type="submit">Upload</button>
</form>

<?php
// Include database connection
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if a file was uploaded
    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
        // Define the target directory for uploads
        $targetDir = "uploads/";
        
        // Generate a unique name for the file
        $fileName = uniqid() . '_' . basename($_FILES['avatar']['name']);
        $targetFilePath = $targetDir . $fileName;

        // Check if the directory exists, if not, create it
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['avatar']['tmp_name'], $targetFilePath)) {
            // Prepare the SQL query to insert the file path into the database
            $sql = "UPDATE company SET avatar_path = ? WHERE CompanyID = ?";

            // Prepare and bind parameters
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('si', $targetFilePath, $companyId);

            // Assuming $companyId is already defined (e.g., from session or form)
            if ($stmt->execute()) {
                echo "Avatar uploaded and saved successfully!";
            } else {
                echo "Database error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error uploading the file.";
        }
    } else {
        echo "No file uploaded or file upload error.";
    }
}

// Close the database connection
$conn->close();
?>
