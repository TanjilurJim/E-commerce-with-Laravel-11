<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Social Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Form Background */
        .card {
            background-color: #343a40; /* Ash color */
            color: white;
        }

        /* Input Fields */
        .form-control {
            background-color: #495057;
            border: none;
            color: #ffffff;
        }

        .form-control:focus {
            background-color: #495057;
            color: #ffffff;
            outline: none;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }

        /* Buttons */
        /* Buttons */
.btn {
    font-size: 1rem;
    font-weight: bold;
    padding: 10px 20px;
    width: 100%;
    border-radius: 0.375rem;
    transition: all 0.3s ease; /* Smooth transition effect */
}

.btn-primary {
    background-color: #0056b3;
    border: none;
}

.btn-primary:hover {
    background-color: #0056b3; /* Keep background color same */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Add shadow */
}

.btn-google {
    background-color: #c23321;
    color: #ffffff;
}

.btn-google:hover {
    background-color: #c23321; /* Keep background color same */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Add shadow */
}

.btn-facebook {
    background-color: #2d4373;
    color: #ffffff;
}

.btn-facebook:hover {
    background-color: #2d4373; /* Keep background color same */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Add shadow */
}

        /* Labels and Text */
        .form-label {
            color: #ffffff;
        }

        /* Section Background */
        body {
            background-color: #71a2fe;
        }
    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Sign in</h3>

                            <!-- Error Messages -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif

                            @if (Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif

                            <!-- Login Form -->
                            <form action="{{ route('admin.login_submit') }}" method="post">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label d-block text-start" for="typeEmailX-2">Email</label>
                                    <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg" required />
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label d-block text-start" for="typePasswordX-2">Password</label>
                                    <input type="password" id="typePasswordX-2" name="password" class="form-control form-control-lg" required />
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                    <label class="form-check-label" for="form1Example3" style="margin-left:5px;">  Remember password </label>
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">
                                    Login
                                </button>
                            </form>

                            <hr class="my-4">

                            <!-- Social Media Buttons -->
                            <button class="btn btn-google btn-lg mb-2" type="button">
                                <i class="fab fa-google me-2"></i> Sign in with Google
                            </button>
                            <button class="btn btn-facebook btn-lg" type="button">
                                <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
