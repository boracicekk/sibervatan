<?php

include "../function/function.php";


if (isset($_POST["submit"])) {

    
    if(!empty($_POST["title"]) && !empty($_POST["content"]) && $_FILES["picture"]["size"] != 0)
    {
        $whiteList = ["png","jpg","webp","jpeg"];
        $name = $_FILES["picture"]["name"];
        $tempPath = $_FILES["picture"]["tmp_name"];
        $destinationPath = "../uploadPic/".$name;
        $extens = explode(".",$name)[1];
        if(in_array($extens,$whiteList))
        {
            echo "deneme";
            move_uploaded_file($tempPath,$destinationPath);


            $dbName = "../database.db";
    
            $title = htmlspecialchars($_POST["title"]);
            $contentMessage = htmlspecialchars($_POST["content"]);

            require "../function/databaseConnection.php";
            
            session_start();
            $query = $connect->prepare("INSERT INTO content(title,blog,imagePath) VALUES(:title,:a,:imagePath)");
            $query->bindParam(":title", $title);
            $query->bindParam(":a", $contentMessage);
            $query->bindParam(":imagePath", $name);
            $query->execute();
            $_SESSION["color"] = "success";
            $_SESSION["message"] = "Başarı ile eklendi";

            header("Location:../admin/admin.php");
        }
    }
}
    $index = "../index.php";
    $blog = "../blog.php";
    $about = "../about.php";
    $contact = "../contact.php";
    $logout = "logout.php";
    $adminPanel = "admin.php";

    $dbName = "../database.db";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <?php require "../part/navbar.php"?>
    <div class="mx-5 my-4 bg-primary-subtle p-3">
        <form method="post" enctype="multipart/form-data">
            <label class="form-label" for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" required><br>
            <label class="form-label" for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" required><br>
            <input type="file" class="form-control" name="picture" id="content" required><br>
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        </form>
    </div>

    </body>

</html>