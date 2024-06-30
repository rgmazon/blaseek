<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
        }

        /* Custom hover effects for navbar links */
        .navbar-nav .nav-link {
            transition: color 0.3s, background-color 0.3s;
            padding: 0.5rem 1rem;
            /* Add padding to links */
        }

        .nav-item {
            width: 120px;
            text-align: center;
        }

        .navbar ul li a.active {
            background-color: #F0F0F0;
            width: 100%;
            border-radius: 5px !important;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link:focus {
            /* background-color: #F0F0F0; */
            border-radius: 5px;
        }

        /* .navbar-nav .nav-link.active {
            color: #fff;
            background-color: #0056b3;
            border-radius: 5px;
        } */

        /* Custom margin for navbar links, logos, and buttons */
        .navbar-content {
            padding-left: 10%;
            padding-right: 10%;
        }

        /* Styles for mobile view */
        @media (max-width: 992px) {
            .navbar-nav {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .nav-item {
                width: 100%;
            }

            .navbar-nav .nav-link {
                text-align: center;
                width: 100%;
                padding: 10px 15px;
                margin: 0;
            }

            .navbar {
                height: auto;
            }

            .button-container {
                display: flex;
                /* Enables flexbox for the container */
                justify-content: center;
                /* Centers horizontally (main axis) */
                align-items: center;
            }

            .careers {
                width: 70%;
            }

        }

        .btn-custom {
            border-width: 2px;
            border-color: #000470;
            font-weight: bold;
        }

        /* Change button color on hover */
        .btn-custom:hover {
            background-color: #000470;
            color: white;
            font-weight: bolder;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid navbar-content">
            <a class="navbar-brand" href="#">
                <img src="..\inc\logos\blaseeklogo.jpg" style="height: 40px; width: 110px" alt="blaseek logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="../pages/index.php" class="nav-link <?php if ($currentPage == 'index.php') echo 'active'; ?>"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="../pages/services.php" class="nav-link <?php if ($currentPage == 'services.php') echo 'active'; ?>"><b>Services</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="../pages/about.php" class="nav-link <?php if ($currentPage == 'about.php') echo 'active'; ?>"><b>About</b></a>
                    </li>
                    <li class="nav-item">
                        <a href="../pages/contact.php" class="nav-link <?php if ($currentPage == 'contact.php') echo 'active'; ?>"><b>Contact us</b></a>
                    </li>
                </ul>
                <div class="button-container">
                    <button class="btn careers btn-custom ml-lg-2" onclick="window.location.href = '../pages/careers.php';">Careers</button>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>