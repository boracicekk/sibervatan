<?php
    include "function/function.php";

    if(isset($_POST["submitButton"]))
    {
        $nameSurname = htmlspecialchars($_POST["nameSurname"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);
        
        $dbName = "database.db";


        insertContact($dbName,$nameSurname,$email,$message);
        
    }





?>




<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
</head>

<body>

    <?php
    $index = "index.php";
    $blog = "blog.php";
    $about = "about.php";
    $contact = "contact.php";
    $logout = "admin/logout.php";
    $adminPanel = "admin/admin.php";

    include "part/navbar.php" ?>

    <div class="contact-wrapper">
        <div class="container mt-4">
            <div class="contact-container">
                <div class="contact-top-title">
                    Contact Form
                </div>
                <div class="col-9 mx-auto">
                    <form method="post">
                        <div class="fullname">
                            <input type="text" name="nameSurname" id="" class="form-control" placeholder="Full Name" required>
                        </div><br>
                        <div class="email-input">
                            <input type="email" name="email" id="" class="form-control" placeholder="Email Address" required>
                        </div><br>
                        <div class="message-input">
                            <textarea name="message" id="" cols="60"  rows="5" class="form-control" placeholder="Message" required></textarea>
                        </div><br>
                        <div class="button-input">
                            <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid mt-5"></div>
        <hr>
        </div>
        <div class="container text-center mt-5 mb-5">
            <div class="copyright">
                © 2021 All rights reserved.
            </div>
        </div>

    </footer>

</body>

</html>