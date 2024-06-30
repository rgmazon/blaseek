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
            background: #0f0c34;
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
        }

        .explore {
            background: #ff5722;
        }

        /* Accent color for buttons */
        .learn {
            background: #03a9f4;
        }

        /* Another accent color */

        .graphics {
            position: relative;
            flex: 1;
            /* background: linear-gradient(to bottom right, #673ab7, #e91e63); */
            /* Gradient */
            display: flex;
            justify-content: center;
            /* Horizontally center */
            align-items: center;
            /* Vertically center */
        }

        .image1 {

            height: 600px;
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

            .image1 {
                width: 50%;
                height: 50%;
                display: none;
            }
        }
    </style>
</head>



<body>
    <div class="container">
        <div class="content">
            <h1>Blaseek Recruitment</h1>
            <p>A clean and intuitive navbar that seamlessly adapts to any device, keeping your website navigation accessible and user-friendly.</p>
            <div class="buttons">
                <button class="explore">Explore Now</button>
                <button class="learn">Learn More</button>
            </div>
        </div>

        <div class="graphics">
            <img src="../images/image1.jpg" alt="image" class="image1">
        </div>
    </div>
</body>

</html>