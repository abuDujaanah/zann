<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zanzibar Tech Opportunities</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/style.css" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container-fluid">
            <h1 class="logo navbar-brand p-1" >Zanzibar Tech Opportunities</h1>
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
                        <a class="nav-link btn btn-success text-white" href="signin.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="flex-grow-1">
        <div class="container p-5">
            <h2 class="py-5">Join <b class="text-success">Zanzibar Tech Opportunities</b> </h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-success p-5">
                        <div class="row">
                            <div class="col-10">
                                <h4>Join as a company</h4>
                            </div>
                            <div class="col-2">
                                <input id="company-radio" class="float-end" type="radio" name="join-option" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-success p-5">
                        <div class="row">
                            <div class="col-10">
                                <h4>Join as an IT Specialist</h4>
                            </div>
                            <div class="col-2">
                                <input id="it-specialist-radio" class="float-end" type="radio" name="join-option" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 justify0content-center">
                    <h5 class="text-center py-2">Already have an Account?</h5>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <center>
                        <a href="login.php" class="w-25 btn btn-success text-center">Login</a>
                    </center>
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

    <script src="assets/script.js"></script>
    <script>
    document.getElementById('company-radio').addEventListener('change', function() {
        if (this.checked) {
            window.location.href = 'company_registration.php'; // Redirect to the company page
        }
    });

    document.getElementById('it-specialist-radio').addEventListener('change', function() {
        if (this.checked) {
            window.location.href = 'it_specialist_registration.php'; // Redirect to the IT specialist page
        }
    });
    </script>
</body>
</html>
