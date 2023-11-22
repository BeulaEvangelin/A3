
<?php session_start();

if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true){
    ?><p>You are NOT logged in. This is secret info</p>
    <a href="admin-login.php">Login here</a><?php
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
<h1>IMM NEWS NETWORK</h2>
<?php
?><ul><?php
while ($row = $stmt->fetch()) {
    ?>
      <a href="member-logout.php">Logout</a><br><br>
    <li>
        <a href="insert-like.php">Like</a> <br>
        <a href="insert-unlike.php">Unlike</a> <br>
        Category: <?= $row["category"] ?><br>
        Title: <?= $row["title"] ?><br> 
        Author: <?= $row["author"] ?><br> 
        Content: <?= $row["content"] ?><br>
        Featured: <?= $row["featured"] ?><br><br>
    </li>
    
    <?php
}
?>
</ul>
<?php
}
?>
