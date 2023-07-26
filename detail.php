<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Text</title>

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
        include "function/function.php";

        $index = "index.php";
        $blog = "blog.php";
        $about = "about.php";
        $contact = "contact.php";
        $logout = "admin/logout.php";
        $adminPanel = "admin/admin.php";
        $adminPanel = "admin/admin.php";
        $dbName = "database.db";
        $id = $_GET["p"];

        $datas = getById($id,$dbName);
        $title = $datas[0]["title"];
        $blog = $datas[0]["blog"];
        $imagePath = $datas[0]["imagePath"];

        include "part/navbar.php"?>

    <div class="blog-wrapper">
        <div class="container mt-4">
            <div class="blog-container">
                
                <div class="blog-top-title">
                    Blog
                </div>
                <div class="blog-container-text">
                    <div class="blog-text-title">
                        <?php echo $title?>
                    </div>
                    <div class="blog-post-thumbnail w-100 p-3">
                        <img src="<?php echo "uploadPic/".$imagePath?>" alt="" srcset="" style="width: 300px;">
                    </div>
                    <div class="blog-text">
                        <?php echo $blog?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid mt-5"></div>
            <hr>
        </div>
        <div class="container text-center mt-5 mb-5" >
            <div class="copyright">
                © 2023 All rights reserved.
                <a href="admin/login.php">giriş</a>
                
            </div>   
        </div>
        
    </footer>

</body>

</html>