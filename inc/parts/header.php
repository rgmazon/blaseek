<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../inc/bootstrap/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="../inc/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../inc/bootstrap/js/jquery-3.5.1.slim.min.js"></script>


    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
        }

        .navbar {
            position: sticky;
            z-index: 1000;
            background-color: #1c1347;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            /* Ensure the popup appears above other content */
        }

        .custom-toggler {
            background-color: #000470;
        }

        .navbar-toggler-icon {
            color: white;
        }

        .nav-link {
            color: #472C4C;
            font-weight: bold;
        }

        .nav-link,
        a {
            display: inline-block;
            position: relative;
        }

        a.nav-link:hover {
            background-color: #F0F0F0;
            font-weight: bolder;
        }

        .navbar ul li a.active {
            width: 100%;
            border-bottom: 3px solid;
            border-color: royalblue;
        }

        /* Customize the toggler button */
        .navbar-toggler {
            border-color: #e6e6e6;
            background-color: pink;
            color: #ffffff;
        }

        /* Change background color on hover */
        .navbar-toggler:hover {
            /* background-color: #F0F0F0; */
            background-color: pink;
        }

        .btn-custom {
            border-width: 2px;
            border-color: royalblue;
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #1c1347;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="..\inc\logos\blaseeklogo.jpg" style="height: 40px; width: 110px" alt="blaseek logo">
            </a>

            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a href="../pages/index.php" class="nav-link <?php if ($currentPage == 'index.php') echo 'active'; ?>">Home</a></li>
                        <li class="nav-item"><a href="../pages/services.php" class="nav-link <?php if ($currentPage == 'services.php') echo 'active'; ?>">Services</a></li>
                        <li class="nav-item"><a href="../pages/about.php" class="nav-link <?php if ($currentPage == 'about.php') echo 'active'; ?>">About</a></li>
                        <li class="nav-item"><a href="../pages/contact.php" class="nav-link <?php if ($currentPage == 'contact.php') echo 'active'; ?>">Contact us</a></li>
                    </ul>



                </ul>
                <div class="d-flex" role="search">
                    <button class="btn btn-custom" onclick="window.location.href = '../pages/careers.php';">Careers</button>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>