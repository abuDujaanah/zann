<?php

include_once 'DB.php';
$db = new DBhelper();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>IT Specialist Registration - Zanzibar Tech Opportunities</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/style.css" rel="stylesheet">

</head>
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
            <h2 class="py-5">IT Specialist Registration</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card card-success p-5">
                        <form id="it-specialist-registration-form" action="it_register.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email </label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="github" class="form-label">GitHub Username</label>
                                        <input type="text" class="form-control" id="github" name="git">
                                    </div>
                                    <div class="form-group">
                                        <label for="specialty" class="form-label">Specialty</label>
                                        <input type="text" class="form-control" id="speciality" name="special">
                                    </div>
                                    <div class="form-group">
                                        <label for="experience" class="form-label">Experience (years)</label>
                                        <input type="number" class="form-control" id="experience" name="experi">
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-6">
                                <button type="submit" name="submit" class="btn btn-secondary">Register</button>
                                <!-- <a href="it_specialist_dashboard.php"  name="register" type="register" class="btn btn-success">Register</a> -->
                                    <a href="signup.php" class="btn btn-secondary">Go back</a>
                                </div>
                                <div class="col-lg-6">
                                    <span class="float-end">Already have an Account? <a class="text-success" href="signin.php">Login</a></span>
                                </div>
                            </div>
                        </form>
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

</body>
</html>
