<?php
//update-about.php
//Update the record

$title = $_POST["title"];
$content = $_POST["content"];
$about_id = '1';


$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("UPDATE `about_page` 
	SET `title` = '$title', 
	`content` = '$content'
	WHERE `about_page`.`about_id` = $about_id;");

//execute
if($stmt->execute()){
	?><p>Record <?= 1 ?> UPDATED</p><?php
}else{
	?><p>Could not UPDATE record</p><?php
}
?>
