<?php
//contact-form.php
//Form that users input their data into
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
            <input type="checkbox" name="categoryInterests[]" value="Industry" />
            Industry
            <input type="checkbox" name="categoryInterests[]" value="Technical" />
            Technical
            <input type="checkbox" name="categoryInterests[]" value="Career" /> Career
            <br />

            <label for="role">Your role:</label>
            <select name="role">
            ><br /><br />

              <option value="Writer">Writer</option>
              <option value="Contributor">Contributor</option>
              <option value="Administrator">Administrator</option></select
            ><br /><br />
          </fieldset>
          <input type="submit" value="Submit" />
        </form>
      </section>