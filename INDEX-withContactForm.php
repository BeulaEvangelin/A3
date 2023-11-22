<?php
// contact-form.php
// Form that users input their data into
// and hit submit

$dsn = "mysql:host=localhost;dbname=immnewsnetwork;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";

// connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

// prepare
$stmt = $pdo->prepare("SELECT articles_page.*, COUNT(article_likes.likes) AS total_likes
FROM articles_page
LEFT JOIN article_likes ON articles_page.article_id = article_likes.article_id
GROUP BY articles_page.article_id 
");

// execute
$stmt->execute();

// process results
?>
<h1>IMM NEWS NETWORK</h1>
<?php
?><ul><?php
while ($row = $stmt->fetch()) {
    ?><li>
        Likes: <?= $row["total_likes"] ?><br>
        Category: <?= $row["category"] ?><br>
        Title: <?= $row["title"] ?><br>
        Author: <?= $row["author"] ?><br>
        Content: <?= $row["content"] ?><br>
        Featured: <?= $row["featured"] ?><br><br>
    </li><?php
}
?></ul><?php
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

<h4>Register to become a member <a href="user-register.php">Click Here</a></h4>
<h4>Already a member? <a href="member-login.php">Login</a></h4>