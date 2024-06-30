<?php
$currentPage = basename($_SERVER['PHP_SELF']);

include '../inc/parts/head.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blaseek.com | Home</title>
    <link rel="icon" type="image/png" href="../inc/logos/favicon.png">

    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            /* background: #0f0c34; */
            background-image: url(../images/image3.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            backdrop-filter: blur(8px) brightness(0.5);
        }

        .container {
            display: flex;
            /* Flexbox for layout */
            flex: 1;
        }

        .content {
            padding-top: 100px;
            flex: 1;
        }

        .content h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .buttons button {
            padding: 10px 20px;
            margin-right: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .explore {
            background: #ff5722;
            color: white;
            font-weight: bold;
        }

        .explore:hover {
            background: none;
            color: #ff5722;
            font-weight: bold;
            border: 2px solid #ff5722;
        }

        /* Accent color for buttons */
        .learn {
            background: #000470;
            color: white;
            font-weight: bold;
        }

        .learn:hover {
            background: #000470;
            color: white;
            font-weight: bold;
        }

        /* Media queries for responsiveness */
        @media (max-width: 768px) {

            /* Tablet and smaller screens */
            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                /* Stack elements vertically */
            }

            .content {
                padding: 20px;
                /* Reduce padding */
            }

            .content h1 {
                font-size: 2em;
                /* Smaller heading */
            }

            .main-title {
                font-size: 20px;
                font-weight: bolder;
            }

            .sub-title {
                font-size: 15px;
                font-weight: bold;
            }

        }

        @media (max-width: 480px) {

            /* Mobile phones */
            .content {
                text-align: center;
            }

            .buttons {
                justify-content: center;
            }

            .buttons button {
                margin: 5px;
                /* Reduce button margins */
            }

            .main-title {
                font-size: 20px;
                font-weight: bolder;
            }

            .sub-title {
                font-size: 15px;
                font-weight: bold;
            }
        }

        .main-title {
            font-size: 50px;
            font-weight: bolder;
        }

        .sub-title {
            font-size: 35px;
            font-weight: bold;
        }
    </style>
</head>



<body>
    <div class="container">
        <div class="content">
            <p class="main-title">Blaseek Recruitment</p>
            <p class="sub-title">The Right People. The Right Fit. Right Now.</p>
            <p>Blaseek Recruitment: Connecting Exceptional Talent with Transformative Opportunities</p>
            <br>

            <div class="buttons">
                <button class="explore">Explore Now</button>
                <button class="learn">Contact Us</button>
            </div>
        </div>
    </div>
</body>

</html>