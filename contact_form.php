<?php
//contact-form.php
//Form that users input their data into
//fName, lName, DOB
//and hit submit
?>
      <section>
        <h1>Contact</h1>
        <form name="contactPage" action="process-contact-form.php" method="POST">
          <fieldset>
            <legend>Your Info</legend>
            <label for="name">Name (required):</label>
            <input type="text" name="name" required />

            <label for="email">Email (required):</label>
            <input type="email" name="email" required /><br />

            <label for="categoryInterests">Category interests:</label>
            <input type="checkbox" name="categoryInterests" value="1" />
            Industry
            <input type="checkbox" name="categoryInterests" value="2" />
            Technical
            <input type="checkbox" name="categoryInterests" value="3" /> Career
            <br />

            <label for="role">Your role:</label>
            <select name="role">
              <option value="op1">Writer</option>
              <option value="op2">Contributor</option>
              <option value="op3">Administrator</option></select
            ><br /><br />
          </fieldset>
          <input type="submit" value="Submit" />
        </form>
      </section>