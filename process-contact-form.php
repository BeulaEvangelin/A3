<?php
//process-contact-form.php
//receives user-submitted data

$name = $_POST["name"];
$email = $_POST["email"];
$category_Interest = implode(', ', $_POST["categoryInterests"]);
$role = $_POST["role"];

//saves the user data to the database table

$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `contact_form`
(`Submission_id`, `name`, `email`, `category_Interest`, `role`) 
VALUES 
(NULL,'$name','$email','$category_Interest','$role') ;");

//execute

if($stmt->execute()){ ?>
	<h1>Thank you!</h1>
	<p>You submitted the following:</p>

	<p>Name: <?=$name ?></p>
	<p>Email: <?=$email ?></p>
	<p>Interested Category: <?= $category_Interest ?></p>
    <p>Your Role: <?=$role ?></p>
<?php
}else{ 
	?><h1>Error</h1> <?php
}
?>
<a href="user_register.php">Register as a MEMBER</a> <br>
<a href="login_member.php">Already a member</a>