<?php \
session_start();
 $past = time() - 3600; 
 //this makes the time in the past to destroy the cookie 
 /*if (isset($_COOKIE['ID_my_site'])) {
     echo '1';
    unset($_COOKIE['ID_my_site']);
    unset($_COOKIE['Key_my_site']);
    setcookie('ID_my_site', null, -1, '/cortoProto/');
    setcookie('Key_my_site', null, -1, '/cortoProto/');
    return true;
} else {
    echo '2';
    return false;
}*/
session_destroy();
//  setcookie('ID_your_site', "", $past); 
//  setcookie('Key_your_site', "", $past); 
header("Location: login.php"); 
 ?> 