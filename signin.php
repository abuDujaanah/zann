<?php

include 'DB.php';
$db = new DBhelper();
$it = $db->getRows("specialist");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In - Zanzibar Tech Opportunities</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/style.css" rel="stylesheet"></head>
<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container-fluid">
            <h1 class="logo navbar-brand p-1">Zanzibar Tech Opportunities</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="signin.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="flex-grow-1">
        <div class="container p-5">
            <h2 class="py-3">Sign In</h2>
            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card p-5">
                        <form id="signin-form" action="authenticate.php" method="POST">
                            <div class="form-group">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <p class="mt-3">Forgot Password?</p>
                            <button name="signin" type="submit" class="btn w-100 btn-primary btn-success mt-1">Sign In</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>Don't have an account? <a class="text-success" href="signup.php">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer mt-auto text-white py-3">
        <div class="container">
            <p>&copy; 2024 Zanzibar Tech Opportunities. All rights reserved.</p>
            <p>Follow us on:
                <a href="#" class="text-white">Facebook</a> |
                <a href="#" class="text-white">Twitter</a> |
                <a href="#" class="text-white">LinkedIn</a>
            </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
