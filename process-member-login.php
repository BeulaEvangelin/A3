<?php session_start();
//process-member-login.php
//receive username and password POST variables
$username = $_POST["username"];
$password = $_POST["password"];
$user_role = 'Member';

//check the database for the username and password combination
$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt = $pdo->prepare("SELECT `user_Id`, `username`, `role` 
    FROM `user_role`
	WHERE `username` = '$username' AND `password` = '$password' AND `role`= '$user_role' ;");
$stmt->execute();

//if u/p is correct, 
if($row = $stmt->fetch()){
	//show dashboard
	?><p>Hello, <?=$username ?></p><?php
	$_SESSION["user_Id"] = $row['user_Id'];
	$_SESSION["username"] = $row['username'];
	$_SESSION["loggedIn"] = true;
	?><a href="member-articles.php">GO to IMM homepage</a><br>
	<?php
}else{
	//else show error message
	?><p>Error. <a href="member-login.php">Try login again</p><?php
}

?>