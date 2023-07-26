<?php
    
    setcookie("auth","s",time()-(60*60*24),"/");
    header("Location:../index.php");

?>