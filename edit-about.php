<?php session_start();
//show-contact-form-submission.php
//show all contact form submissions from contact_form table

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
$stmt = $pdo->prepare("SELECT * FROM `about_page`;");

//execute
$stmt->execute();

//process results
?>
<h1> Edit About Page Content</h1>

    <?php
while($row = $stmt->fetch()) {     
    ?>
<form action="update-about.php" method="POST">
    title: <input type="text" name="title" value="<?= $row["title"] ?>">
    Content: <input type="text" name="content" value="<?= $row["content"] ?>">
    <input type="submit">
</form>
    <?php
}
?>

<?php
}
?>
