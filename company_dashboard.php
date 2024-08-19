<?php 
    session_start();
    include_once 'DB.php';
    $db = new DBHelper();
    
    if( isset( $_SESSION['company_email'] ) ) {

        $email = $_SESSION['company_email'];

        $co_name = $db->getData("company", "Company_Name", "email", $email);
        
    }

    include 'db_connection.php';

    // Assuming $companyId is already defined (e.g., from session or another source)
    $sql = "SELECT avatar_path FROM company WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $companyId);
    $stmt->execute();
    $stmt->bind_result($avatarPath);
    $stmt->fetch();
    $stmt->close();
    $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
    <link rel="stylesheet" href="assets/style2.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <?php if( $avatar_path ) { ?>
                <a href="update_avatar.php"><img src="<?php echo $avatarPath; ?>" alt="Profile Image"></a>
                <?php } else { ?>
                <a href="upload_avatar.php"><img src="assets/images/avatar.jpeg" alt="Profile Image"></a>
                <?php } ?> 
            </div>
            <a href="post-opportunity.php">Opportunities</a>
            <a href="view-applications.php">Applications</a>
            <a href="message-users.php">Communication</a>
            <a href="rate-users.php">Rate Users</a>
            <a href="">Settings</a>
        </div>
        <div class="main-content">
            <header class="header">
                <div class="header-content">
                    <h1 style="margin-left: 20px;">
                        <?php
                        if($co_name) {
                            echo $co_name;
                        } else {
                            echo 'Zan-tech';
                        }
                        ?>
                         Opportuninities</h1>
                </div>
            </header>
            <div class="content">
                <div class="card p-4">
                    <h2>Welcome to the Company Dashboard</h2>
                    <p>This system allows companies to post job opportunities, view applications, rate users, and message users.</p>
                    <img src="company_dashboard_image.jpg" alt="Company Dashboard">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
