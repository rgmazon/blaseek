<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google-like Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #fff;
            border-bottom: 1px solid #eee;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .search-bar {
            width: 400px;
            /* Adjust as needed */
        }

        .google-logo {
            width: 92px;
            /* Google logo width */
        }

        @media (max-width: 768px) {
            .search-bar {
                width: 100%;
                /* Make search bar full width on smaller screens */
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google logo" class="google-logo">
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gmail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Images</a>
                    </li>
                </ul>
                <form class="d-flex ms-auto">
                    <input class="form-control me-2 search-bar" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>