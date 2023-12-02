<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .jumbotron {
            background-color: #343a40;
            color: #ffffff;
            padding: 100px 0;
        }

        .feature {
            text-align: center;
            padding: 50px 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Your Brand</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Jumbotron -->
<div class="jumbotron text-center">
    <h1 class="display-4">Your Catchy Headline</h1>
    <p class="lead">A short description of your product or service.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

<!-- Features Section -->
<div class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Feature 1</h2>
                <p>A brief description of the first feature.</p>
            </div>
            <div class="col-md-4">
                <h2>Feature 2</h2>
                <p>A brief description of the second feature.</p>
            </div>
            <div class="col-md-4">
                <h2>Feature 3</h2>
                <p>A brief description of the third feature.</p>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional, for certain components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
