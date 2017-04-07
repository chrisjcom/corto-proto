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
	$usuario = getUser($username,$users);
	//foreach ($users as $key => $value) {
		if($username == $usuario['user']) {
			if ($pass != $usuario['pass']){
				header("Location: login.php"); 
			}
			//otherwise they are shown the admin area
			else{
?>
				<p>Hostname: <?php echo gethostname()?></p>
				<p>Admin Area</p>
				<p><?php echo $usuario['name']; ?>'s Content</p>
				<a href=logout.php>Logout</a> 
<?php
			}
		}
	//}
	//}
}
 else{ //if the cookie does not exist, they are taken to the login screen 
	header("Location: login.php"); 
 }
 ?>