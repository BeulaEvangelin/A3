<?php
//update-about.php
//Update the record

$category = $_POST["category"];
$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];
$featured = $_POST["featured"];
$article_id = $_POST["article_id"];


$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("UPDATE `articles_page` 
    SET `category`='$category', 
    `title` = '$title',
    `author` = '$author',
    `content` = '$content',
    `featured` = '$featured'
	WHERE `articles_page`.`article_id` = '$article_id';");

//execute
if($stmt->execute()){
	?><p>Article ID <?= $article_id ?> UPDATED</p><?php
}else{
	?><p>Could not UPDATE record</p><?php
}
?>
<a href="select-article.php">Back to Articles</a><br>
<a href="process-admin-login.php">Back to Admin Panel</a>