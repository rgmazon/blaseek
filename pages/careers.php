<?php
$currentPage = basename($_SERVER['PHP_SELF']);

include '../inc/parts/header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blaseek.com | Careers</title>
    <link rel="icon" type="image/png" href="../inc/logos/favicon.png">

    <style>
        body {
            background-color: #E3E3E3;
        }
    </style>
</head>



<body>
    <h1>careers</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form col-6 mx-auto">

        </div>
    </form>

    <form action="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="fullName" required placeholder="Full Name">
                        <label for="fullName">Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" required placeholder="Email Address">
                        <label for="email">Email Address</label>
                    </div>

                    <div class="form-group mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" checked id="candidate" value="Candidate">
                            <label class="form-check-label" for="candidate">Candidate</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="partner" value="Partner">
                            <label class="form-check-label" for="partner">Partner</label>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a message" id="message"></textarea>
                        <label for="message">Leave a message</label>
                    </div>

                    <div class="form-control mb-3">
                        <label for="">Upload Resume (.doc, .docx, .rtf, .pdf)</label>
                        <input type="file" class="form-control" id="resume" accept=".pdf,.docx,.png,.jpg">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>