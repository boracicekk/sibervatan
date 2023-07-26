<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokümanlar</title>
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

        $dbName = "../database.db";
            
        include "../part/navbar.php";
        include "../function/function.php";
    ?>
    

    <div class="my-3 mx-5 p-3">
        <a href="admin.php" class="btn btn-primary mx-3 my-3">Postları Göster</a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 120px;">Numara</th>
          <th style="width: 300px;">Ad Soyad</th>
          <th>Mesaj</th>
          <th style="width: 150px;"></th>
        </tr>
      </thead>
      <tbody>
        <?php $datas = selectComment($dbName);foreach ($datas as $data) : ?>
          <tr>
            <td><?php echo $data["id"] ?></td>
            <td><?php echo $data["nameSurname"] ?></td>
            <td><?php echo $data["message"]?></td>
            <td>
              <a href="../dataOperation/deleteComment.php?p=<?php echo $data["id"]?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php endforeach ?>

      </tbody>
    </table>

  </div>


    
</body>
</html>