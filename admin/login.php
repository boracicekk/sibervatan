<?php
    
    $dbName = "../database.db";
    include "../function/function.php";

    include "../function/databaseConnection.php";


    if(isset($_POST["submitButton"]))
    {
        $name = $_POST["nick"];
        $passwd = md5($_POST["password"]);

        adminLogin($name,$passwd,$dbName); 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokümanlar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/flaticon/flaticon.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/mobile.css">
</head>
<body>
    <?php 
        $index = "../index.php";
        $blog = "../blog.php";
        $about = "../about.php";
        $contact = "../contact.php";
        $logout = "logout.php";
        $adminPanel = "admin.php";
    
        include "../part/navbar.php"?>

    <div class="col-11 p-3 mx-auto my-3 center">
        <form method="post">
            <label class="form-label" for="nick">Nick</label>
            <input class="form-control" type="text" name="nick" id="nick" required><br>
            <label class="form-label" for="Password">Password</label>
            <input class="form-control" type="password" name="password" id="password" required><br>

            <input class="btn btn-primary" type="submit" value="Submit" name="submitButton">

        </form>
    </div>


    
</body>
</html>