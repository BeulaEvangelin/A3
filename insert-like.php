<?php session_start();
//process-insert-person-form.php
//receives user-submitted data
//fName, lName, DOB

$user_Id = $_SESSION["user_Id"] ;
$article_id = $_GET["article_id"];;
$likes = 1;

echo $_SESSION['user_Id'];
echo $_GET['article_id'];

//saves the user data to the database table

$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `article_likes`
(`like_id`, `user_id`, `article_id`, `likes`) 
VALUES (NULL, '$user_Id', '$article_id', '$likes' );");

//execute

if($stmt->execute()){ ?>
	
<?php
}else{ 
	?><h1>Error</h1> <?php
}
?>
