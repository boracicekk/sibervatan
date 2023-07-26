<?php
    $index = "../index.php";
    $blog = "../blog.php";
    $about = "../about.php";
    $contact = "../contact.php";
    $logout = "logout.php";
    $adminPanel = "admin.php";

    $dbName = "../database.db";
    include "../function/databaseConnection.php";
    
    include "../function/function.php";
    
    $id = $_GET["p"];
    
    $data = getById($id,$dbName);
    $title = $data[0]["title"];
    $content = $data[0]["blog"];
    
    if(isset($_POST["submit"]))
    {
        $whiteList = ["png","jpg","webp","jpeg"];
    
        if(!empty($_POST["title"]) && !empty($_POST["content"]) && $_FILES["picture"]["size"] != 0)
        {
            $name = $_FILES["picture"]["name"];
            print_r($_FILES["picture"]);
            $tempPath = $_FILES["picture"]["tmp_name"];
            $imagePath = "../uploadPic/".$name;
            $extens = explode(".",$name)[1];
            if(in_array($extens,$whiteList))
            {
                move_uploaded_file($tempPath,$imagePath);

                $dbName = "../database.db";
        
                $title = $_POST["title"];
                $contentMessage = $_POST["content"];

                require "../function/databaseConnection.php";
                
                session_start();
                $query = $connect->prepare("UPDATE content SET title=:title, blog=:contentMessage, imagePath=:imagePath WHERE id=$id");
                $query->bindParam(":title", $title);
                $query->bindParam(":contentMessage", $contentMessage);
                $query->bindParam(":imagePath", $name);
                $query->execute();
                $_SESSION["color"] = "Başarılı!";
                $_SESSION["message"] = "Tebrikler";

                header("Location:../admin/admin.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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


  <?php require "../part/navbar.php" ?>

    <div class="bg-danger p-3 m-3">
        <form method="post" enctype="multipart/form-data">
            <label for="" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="<?php echo $title?>">
            <label for="" class="form-label">Content</label>
            <input type="text" class="form-control" name="content" value="<?php echo $content?>"><br>
            <input type="file" class="form-control" name="picture">
            <input type="submit" value="Submit" name="submit" class="my-3 btn btn-primary">
        </form>
    </div>
</body>
</html>
<!-- value="<?php echo $contentMessage?>" -->