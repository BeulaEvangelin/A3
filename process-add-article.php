<?php
//process-insert-person-form.php
//receives user-submitted data
//fName, lName, DOB

$category = $_POST["category"];
$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];
$featured = $_POST["featured"];

//saves the user data to the database table

$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `articles_page`
(`article_id`, `category`, `title`, `author`, `content`, `featured`) 
VALUES 
(NULL, '$category', '$title', '$author', '$content', '$featured');");

//execute

if($stmt->execute()){ ?>
	<h1>Success!</h1>
	<h4>You submitted the following:</h4>

        <p>Category: <?=$category?></p> 
        <p>Title: <?=$title?></p> 
        <p>Author: <?=$author?></p> 
        <p>Content: <?=$content?></p>
        <p>Featured: <?=$featured?></p>

<?php
}else{ 
	?><h1>Error</h1> <?php
}
?>
<a href="select-article.php">Back to Articles</a><br>
<a href="process-admin-login.php">Back to Admin Panel</a>