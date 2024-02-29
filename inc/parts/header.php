<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../inc/bootstrap/css/bootstrap.min.css">
    <script src="../inc/bootstrap/js/bootstrap.bundle.min.js"></script>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
        }

        .navbar {
            position: sticky;
            z-index: 1000;
            background-color: #ffffff;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            /* Ensure the popup appears above other content */
        }



        .theme-bg {
            background-color: #000470;
        }

        .theme-font {
            color: red;
        }

        .custom-toggler {
            background-color: #000470;
        }

        .navbar-toggler-icon {
            color: white;
        }

        .navbar ul li a.active {
            background-color: #007bff;
            /* Example active link background color */
            color: red;
            /* Example active link text color */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="..\inc\logos\blaseeklogo.jpg" style="height: 40px; width: 110px" alt="blaseek logo">
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../pages/index.php" <?php if ($currentPage == 'index.php') echo 'class="active"'; ?>>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a href="../pages/index.php" class="nav-link <?php if ($currentPage == 'index.php') echo 'active'; ?>">Index</a></li>
                        <li class="nav-item"><a href="../pages/contact.php" class="nav-link <?php if ($currentPage == 'contact.php') echo 'active'; ?>">Contact us</a></li>
                        <!-- Add more navbar links as needed -->
                    </ul>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</body>

</html>