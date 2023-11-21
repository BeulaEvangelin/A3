<?php
//delete.php
//actually delete the record from the database table

$article_id = $_POST["article_id"];

$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("DELETE FROM `articles_page` WHERE `articles_page`.`article_id` = $article_id;");

//execute
if($stmt->execute()){
	?><p>Article ID <?=$article_id ?> Deleted</p><?php
}else{
	?><p>Could not delete record</p><?php
}
?>
<a href="select-article.php">Back to Articles</a><br>
<a href="process-admin-login.php">Back to Admin Panel</a>