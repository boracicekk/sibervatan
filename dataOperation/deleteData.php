<?php
    $dbName = "../database.db";
    require "../function/databaseConnection.php";
    $id = $_GET["p"];

    try
    {
        session_start();
        $query = $connect->prepare("DELETE FROM content WHERE id=:id");
        $query->bindParam(":id",$id);
        $query->execute();
        $_SESSION["message"] = $id." numaralı içerik silindi";
        $_SESSION["color"] = "danger";
        header("Location:../admin/admin.php");
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }





?>