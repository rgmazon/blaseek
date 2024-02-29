<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop-up Sticky Div with Shadow</title>


    <style>
        .popup-container {
            position: sticky;
            top: 20px;
            /* Adjust as needed */
            z-index: 1000;
            /* Ensure the popup appears above other content */
        }

        .popup-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            /* Shadow effect */
        }

        .main-content {
            margin-top: 200px;
            /* To create space for the sticky popup */
        }
    </style>
</head>

<body>
    <div class="popup-container">
        <div class="popup-content">
            <p>This is a pop-up div with a sticky position and shadow effect.</p>
        </div>
    </div>
    <div class="main-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec semper libero. Phasellus nec nisi non lorem blandit feugiat. Integer a metus et elit volutpat tincidunt. Suspendisse potenti. Sed vehicula lacinia eros, eget fermentum eros accumsan sit amet. Mauris tristique est nec purus blandit, vitae varius turpis pharetra. Morbi venenatis congue eros eget feugiat. Donec sagittis, eros nec cursus laoreet, ex ligula hendrerit tortor, sed cursus sem quam nec ex. Vivamus pharetra mi sit amet metus scelerisque, vel dictum libero tempor. Nullam feugiat augue non est fermentum varius. Sed finibus justo sed elit accumsan, nec dignissim odio fermentum. In lacinia orci id velit eleifend posuere.</p>
        <!-- More content here -->
    </div>
</body>

</html>