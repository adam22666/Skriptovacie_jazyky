<?php
    session_start();
     unset($_SESSION["user_name"]);
     echo 'You have been logged out';
     echo '<br>';
     echo '<br>';
     echo '<br>';
     echo  '<a href="../../index.php"> <div class="header-text caption">
     <h2>BACK TO MAIN PAGE</h2></a></div>';
?>