<?php session_start();
//select-persons.php
//show all person records from person table

if(!isset($_SESSION["loggedIn"])|| $_SESSION["loggedIn"] != true){
	?><p>You are NOT logged in. This is secret info</p>
	<a href="login.php">Login here</a><?php
	exit();
}else{

$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `articles_page`;");

//execute
$stmt->execute();

//process results
?>
<h1>ADD, EDIT, DELETE</h2>
<a href="add-article.php">Add Article</a><?php
?><ul><?php
while($row = $stmt->fetch()) {     
	?><li>
     ID: <?=$row["article_id"] ?><br>
     Category: <?= $row["category"] ?><br>
     Title: <?= $row["title"] ?><br> 
     Author: <?= $row["author"] ?><br> 
     Content: <?= $row["content"] ?><br>
     Set Featured: <?= $row["featured"] ?><br>
     
	<a href="edit-article.php?article_id=<?=$row["article_id"] ?>">Edit</a> 
	<a href="delete-article-confirmation.php?article_id=<?=$row["article_id"] ?>">Delete</a><br><br>
	</li><?php
}
?></ul>

<?php
}
?>