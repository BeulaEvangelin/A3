<?php session_start();
//show-contact-form-submission.php
//show all contact form submissions from contact_form table

if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true){
	?><p>You are NOT logged in. This is secret info</p>
	<a href="admin-login.php">Login here</a><?php
	exit();
}else{
?>
<h1> Add an Article </h1>
    <form action="process-add-article.php" method="POST">
    <fieldset>
    <legend>Article Details</legend>
        Category: <input type="text" name="category" /><br><br> 

        Title: <input type="text" name="title" /><br><br>

        Author: <input type="text" name="author" /><br><br>

        Content: <input type="text" name="content" /><br><br>
        Featured (Enter 1 for YES, 0 for NO): <input type="text" name="featured" /><br><br>
    </fieldset>
        <input type="submit" value="Submit" />
    </form>
<?php
}
?>
<a href="select-article.php">Back to Articles</a><br>
<a href="process-admin-login.php">Back to Admin Panel</a>