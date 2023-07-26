<?php

    $dsn = "sqlite:".$dbName;
    $connect = new PDO($dsn);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>