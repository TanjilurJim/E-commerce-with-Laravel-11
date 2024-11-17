<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Bar</title>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Section -->
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                        <div class="contact-info">
                            <span style="margin-left:30px;">
                                <img src="{{asset('frontend/img/icons8-envelope-50.png')}}" alt="Envelope" style="width: 15px; height: 15px; margin-right: 8px;">
                                info@example.com
                            </span>
                            <span>
                                <img src="{{asset('frontend/img/icons8-location-50.png')}}" alt="Location" style="width: 15px; height: 15px; margin-right: 8px;">
                                California, TX
                            </span>
                        </div>
                    </div>
    
                    <!-- Right Section -->
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                        <div class="social-icons me-3">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="language-dropdown">
                            English <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm" style="height: 100px;font:16px;font-family:'Poppins';font-weight:550;">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#" style="margin-right: 140px;"> <!-- Adjust margin-right -->
                    <img src="{{asset('frontend/img/logo.png')}}" alt="Logo" style="width: 100px;height:35px;margin-left:30px;">
                </a>
                <!-- Toggler for mobile view -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-2"> <!-- Add ms-2 for slight spacing -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #1e1b39;padding:38px 20px;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #1e1b39;padding:38px 20px;">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #1e1b39;padding:38px 20px;">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #1e1b39;padding:38px 20px;">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #1e1b39;padding:38px 20px;">Contact Us</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
