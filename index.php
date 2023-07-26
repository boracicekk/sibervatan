<?php
  
  include "part/message.php";

?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
        $dbName = "database.db";
    
        include "part/navbar.php";
        include "function/function.php";
    ?>

    <div class="person-info-wrapper">
        <div class="container">
            <div class="person-info-container">
                <div class="row">
                    <div class="person-photo col-md-5">
                        <img src="assets/img/indexProfile.jpg" alt="" srcset="">
                    </div>
                    <div class="person-info-text col-md-7">
                        <div class="person-job">
                            Computer Engineer
                        </div>
                        <div class="person-name">
                            <h1>Bora Çiçek</h1>
                        </div>
                        <div class="person-text">
                            <p>
                                İstanbul-Karabük
                            </p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod asperiores labore beatae,
                            velit officia eum est repellat veritatis. Odio, id magnam eveniet enim architecto
                            reprehenderit neque consectetur porro atque odit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod asperiores labore beatae,
                            velit officia eum est repellat veritatis. Odio, id magnam eveniet enim architecto
                            reprehenderit neque consectetur porro atque odit.
                        </div>
                        <div class="person-social-link">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/boracicekkk"><i class="flaticon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/boracicekkk/"><i class="flaticon-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/boracicekk/"><i class="flaticon-linkedin-1"></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/boracicekk"><i class="flaticon-github"></i></a>
                                </li>
                                <li>
                                    <a href="mailto:boracicekk@outlook.com"><i class="flaticon-mail-1"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-post-wrapper">
        <div class="container">
            <div class="blog-post-container">
                <div class="blog-post-top-title">
                    Blog
                </div>
                <div class="blog-post-row">
                    <div class="row">
                        <?php $datas = selectData($dbName); foreach($datas as $data):?>
                            <?php 
                                $title = $data["title"];
                                $blog = $data["blog"];
                                $imagePath = $data["imagePath"];
                                $id = $data["id"];
                            ?>
                            <?php include "part/card.php"?>
                        <?php endforeach;?>
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
                <a href="admin/login.php">Giriş</a>
            </div>   
        </div>
        
    </footer>

</body>

</html>