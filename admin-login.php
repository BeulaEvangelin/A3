<?php
//admin-login.php
//login page for users who are already members
?>

<section>
<h1>Login</h1>
<form name="userregister" action="process-admin-login.php" method="POST">
<fieldset>
    <legend>Enter ADMIN username and password</legend>

        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="text" name="password" required>

        <input type="submit" value="Submit">
</fieldset>