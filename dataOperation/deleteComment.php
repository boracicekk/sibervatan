<?php

    $id = $_GET["p"];
    $dbName = "../database.db";
    require "../function/databaseConnection.php";

    $query = $connect->prepare("DELETE FROM contact WHERE id=:id");
    $query->bindParam(":id",$id);
    $query->execute();
    header("Location:../admin/comment.php");


?>