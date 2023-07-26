
<?php
    
    if(isset($_SESSION["message"]))
    {
        echo "<div class='alert alert-".$_SESSION["color"]." text-center mb-0'>".$_SESSION["message"]."</div>";
        unset($_SESSION["message"]);
    }
    
?>