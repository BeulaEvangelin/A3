<?php session_start();
//process-member-login.php
//receive username and password POST variables
$username = $_POST["username"];
$password = $_POST["password"];
$user_role = 'Admin';

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
	?><h1>Admin Panel</h1>
    <p>Hello, <?=$username ?></p><?php
	$_SESSION["user_Id"] = $row['user_Id'];
	$_SESSION["username"] = $row['username'];
	$_SESSION["loggedIn"] = true;
	?>
    <ul>
    <li> Contact Form Submissions <a href="show-contact-form-submission.php">View</a></li>
    <li> Edit IMM About Page <a href="edit-about.php">Edit</a></li>

    
    
    <?php
}else{
	//else show error message
	?><p>Error. <a href="member-login.php">Try login again</p><?php
}

?>