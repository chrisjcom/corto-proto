<?php 
 $past = time() - 3600; 
 //this makes the time in the past to destroy the cookie 
 setcookie('ID_my_site', "", $past); 
 setcookie('Key_my_site', "", $past); 
 header("Location: login.php"); 
 ?> 