<?php
//delete-confirmation.php
//show person record to be deleted

$article_id = $_GET["article_id"];

$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `articles_page` 
	WHERE `articles_page`.`article_id` = $article_id;");

//execute
$stmt->execute();

//process results
$row = $stmt->fetch();


?>
<h1>Delete Confirmation</h1>
<p>Are you sure you want to delete this record?</p>
<div>
	<p>Category: <?= $row["category"] ?></p>
	<p>Author: <?= $row["author"] ?></p>
	<p>Content: <?= $row["content"] ?></p>
    <p>Featured: <?= $row["featured"] ?></p>
</div>

<a href="select-article.php">No</a>
<form action="delete-article.php" method="POST">
	<input type="hidden" 
	name="article_id" 
	value="<?= $row['article_id'] ?>"
	>
	<input type="submit" value="Yes">
</form>