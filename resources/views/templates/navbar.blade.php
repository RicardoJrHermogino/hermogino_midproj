<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/your/custom.css">
    <style>
        .navbar-nav .nav-link {
            font-family: 'Poppins', sans-serif;
            font-size: 0.9rem;
        }
        .navbar-brand,
        .nav-link {
            margin-right: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light py-0" style="background-color: #f5f5f7;">
    <div class="container">
        <a class="navbar-brand mb-2 me-auto" href="{{ route('phone_list') }}">
            <img src="{{ asset('img/apple logo.svg') }}" alt="Your Logo" width="28" height="28">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 me-auto">
                <li class="nav-item">
                    <a class="nav-link ms-5" href="{{ route('phone_list') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="margin-right: 20px;" href="{{ route('add_form') }}">Add Phone</a>
                </li>
            </ul>
            
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a>
                        <i class="bi bi-person-circle" style="font-size: 1.5rem;"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>
