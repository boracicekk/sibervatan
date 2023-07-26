<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/flaticon/flaticon.css">
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
    
        include "part/navbar.php"?>

    <div class="about-wrapper">
        <div class="container mt-4">
            <div class="about-container">
                <div class="about-top-title">
                    About
                </div>
                <div class="about-container-text">
                    <div class="about-text-title">
                        Text Title
                    </div>
                    <div class="about-text">
                        <p>

                            2020 yılında Nakipoğlu Cumhuriyet Anadolu Lisesinden mezun oldum. Ardından;
                            2020 yılında Karabük Üniversitesi Bilgisayar Mühendisliğini kazandım.
                        </p>
                        <p>

                            İngilizce hazırlık okudum.
                            2023 yılı itibariyleKarabük Üniversitesi 3.sınıfa geçtim.
                        </p>
                        <p>
                            Siber güvenlik alanında Siber Vatan bünyesinde eğitimlere katılarak kendimi geliştirmeye çalışıyorum.
                        </p>
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
            </div>   
        </div>
        
    </footer>

</body>

</html>