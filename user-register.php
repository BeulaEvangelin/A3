<?php
//user_register.php
//register page for public users who want to become members
?>
<section>
<h1>Register Here</h1>
<form name="userregister" action="process-user-register.php" method="POST">
<fieldset>
    <legend>Register</legend>

        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Register">
</fieldset>