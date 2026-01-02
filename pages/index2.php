<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blaseek</title>

    <link rel="stylesheet" href="../inc/bootstrap/css/bootstrap.min.css">

    <style>
        /* ... (Your existing styles) ... */
        body {
            transition: background-color 0.3s;
        }

        body.dark-mode {
            background-color: #121212;
            /* Dark background for body */
            color: #f0f0f0;
            /* Light text for body */
        }

        .navbar-toggler-icon {
            color: white;
        }

        .dark-mode .navbar {
            background-color: #222;
            /* Darker navbar background */
        }

        .dark-mode .nav-link {
            color: #f0f0f0;
            /* Light text for links */
        }

        .dark-mode .navbar-toggler-icon {
            color: white;
        }

        .dark-mode .btn-success {
            background-color: #f0f0f0;
            /* Light background for button */
            color: #222;
            /* Dark text for button */
        }

        .dark-mode .btn-custom:hover {
            background-color: #F0F0F0;
            color: #222;
            font-weight: bolder;
        }

        .dark-mode .custom-toggler {
            background-color: #222;
        }

        .dark-mode .nav-link:hover {
            background-color: #222;
        }

        .dark-mode .active {
            border-color: #f0f0f0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="..\inc\logos\blaseeklogo.jpg" style="height: 40px; width: 110px" alt="blaseek logo">
            </a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button class="btn btn-success" id="darkModeBtn">Dark Mode</button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="../pages/index.php" class="nav-link <?php if ($currentPage == 'index.php') echo 'active'; ?>">Home</a></li>
                    <li class="nav-item"><a href="../pages/services.php" class="nav-link <?php if ($currentPage == 'services.php') echo 'active'; ?>">Services</a></li>
                    <li class="nav-item"><a href="../pages/about.php" class="nav-link <?php if ($currentPage == 'about.php') echo 'active'; ?>">About</a></li>
                    <li class="nav-item"><a href="../pages/contact.php" class="nav-link <?php if ($currentPage == 'contact.php') echo 'active'; ?>">Contact us</a></li>
                </ul>
                <div class="d-flex" role="search">
                    <button class="btn btn-custom" onclick="window.location.href = '../pages/careers.php';">Careers</button>
                </div>
            </div>
        </div>
    </nav>


    <script src="../inc/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../inc/bootstrap/js/jquery-3.5.1.slim.min.js"></script>


    <script>
        const darkModeBtn = document.getElementById('darkModeBtn');
        const body = document.body;

        darkModeBtn.addEventListener('click', () => {
            body.classList.toggle('dark-mode');

            // Optional: Update button text
            darkModeBtn.textContent = body.classList.contains('dark-mode') ? 'Light Mode' : 'Dark Mode';
        });
    </script>
</body>

</html>