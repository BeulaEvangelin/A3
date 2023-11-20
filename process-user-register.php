<?php
//process-contact-form.php
//receives user-submitted data

$username = $_POST["username"];
$password = $_POST["password"];

//saves the user data to the database table

$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `user_role` 
(`user_Id`, `username`, `password`, `role`) 
VALUES 
(NULL, '$username', '$password', 'Member');");

//execute

if($stmt->execute()){ ?>
	<h1>You have successfully registered as a member</h1>
<?php
}else{ 
	?><h1>Error</h1> <?php
}
?>
<h4>Login Here <a href="member-login.php"> Login</h4>