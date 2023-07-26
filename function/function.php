<?php

    function getElement($dbName)
    {
        require "databaseConnection.php";

        $query = $connect->query("SELECT * FROM content");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    function adminLogin($nick,$passwd,$dbName)
    {
        $dbName;
        require "databaseConnection.php";
        session_start();


        $query = $connect->prepare("SELECT * FROM admins WHERE nick=:nick");
        $query->bindParam(":nick",$nick);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        
        if($data[0]["nick"] == $nick && $data[0]["password"] == $passwd)
        {
            setcookie("auth","admin",time()+(60*60*24),"/");
            $_SESSION["color"] = "success";
            $_SESSION["message"] = "Giriş Yapıldı";
            header("Location:../index.php");
        }
        else
        {
            $_SESSION["color"] = "danger";
            $_SESSION["message"] = "Giriş Yapılamadı";
            include "../part/message.php";
        }

    }
    
    function selectData($dbName)
    {
        
        require "databaseConnection.php";

        try {
            $query = $connect->query("SELECT * FROM content");

            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            
            return $data;
        } 
        catch (PDOException $e) 
        {
            echo "<br>";
            echo "Hata: " . $e->getMessage();
        }
    }
    
    function selectComment($dbName)
    {
        $dbName;
        require "databaseConnection.php";

        try {
            $query = $connect->query("SELECT * FROM contact");

            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            
            return $data;
        } 
        catch (PDOException $e) 
        {
            echo "<br>";
            echo "Hata: " . $e->getMessage();
        }
    }

    function getById($id,$dbName)
    {
        $dbName;
        require "databaseConnection.php";
        
        try {
            $query = $connect->prepare("SELECT * FROM content WHERE id=:id");
            $query->bindParam(":id",$id);
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            
            return $data;
        } 
        catch (PDOException $e) 
        {
            echo "<br>";
            echo "Hata: " . $e->getMessage();
        }
    }

    function insertContact($dbName,$nameSurname,$email,$message)
    {
        $dbName;
        require "databaseConnection.php";

        $query = $connect->prepare("INSERT INTO contact(nameSurname,email,message) VALUES(:nameSurname,:email,:message)");
        $query->bindParam(":nameSurname",$nameSurname);
        $query->bindParam(":email",$email);
        $query->bindParam(":message",$message);
        $query->execute();

    }

    function deleteComment($dbName,$id)
    {
        $dbName;
        $id;
        require "databaseConnection.php";

        try
        {
            session_start();
            $query = $connect->prepare("DELETE FROM contact WHERE id=:id");
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

    }
