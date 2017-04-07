<?php
include 'users.php';
//Connects to your Database 
//mysql_connect("localhost", "root", "210591") or die(mysql_error()); 
//mysql_select_db("simple-php-login") or die(mysql_error()); 
 //checks cookies to make sure they are logged in 
 if(isset($_COOKIE['ID_your_site'])){ 
 	$username = $_COOKIE['ID_your_site']; 
 	$pass = $_COOKIE['Key_your_site']; 
 	//$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 
 	//while($info = mysql_fetch_array( $check )){ 
		//if the cookie has the wrong password, they are taken to the login page 
	foreach ($users as $key => $value) {
		if($username == $value['user']) {
			if ($pass != $value['pass']){
				header("Location: login.php"); 
			}
			//otherwise they are shown the admin area
			else{
				echo 'Hostname: '.gethostname().'<p>';
				echo "Admin Area<p>"; 
				echo $username."'s Content<p>"; 
				echo "<a href=logout.php>Logout</a>"; 
			}
		}
	} 		
	//}
}
 else{ //if the cookie does not exist, they are taken to the login screen 
	header("Location: login.php"); 
 }
 ?>