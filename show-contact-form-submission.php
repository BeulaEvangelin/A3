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
$stmt = $pdo->prepare("SELECT * FROM `contact_form`;");

//execute
$stmt->execute();

//process results
?>
<h1> Contact Form Submissions</h1>
<ul>
    <?php
while($row = $stmt->fetch()) {     
	?>
    <li>
        <p>Submission ID: <?=$row["Submission_id"] ?></p> 
        <p>Name: <?=$row["name"] ?></p> 
        <p>Email: <?=$row["email"] ?></p> 
        <p>Interested Category: <?=$row["category_Interest"] ?></p> 
        <p>Role: <?=$row["role"] ?></p>
	</li>
    <?php
}
?></ul>

<?php
}
?>
<a href="process-admin-login.php">Back to Admin Panel</a>