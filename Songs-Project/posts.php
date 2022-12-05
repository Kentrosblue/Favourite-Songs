<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// array of posts, fetched from database
$posts = [];

include 'database/database.php';
include 'pages/index_functions.php';

//connect to database
$pdo = db_connect();

// submit comment to database
submit_post();

// get posts from database
get_posts();
?>
 
<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="utf-8">
    <title>Cpsc 2030 Project</title>

    <link rel="stylesheet" href="style.css?">
  </head>
  <body>
    <!-- The nav bar -->
    <nav>
      <ul class = "navLinks">
        <li><a href = "home.php">Home</a></li>
        <li><a href = "songs.php">Songs</a></li>
        <li><a href = "comment.php">Comment</a></li>
        <li><a href = "posts.php">Posts</a></li>
        <li><a href = "documentation.php">Doc</a></li>
      </ul>
    </nav>
    <a href = "#"></a>

    <h1>Posts</h1>

    <?php
    //Where the users comments will appear 
      the_comments();
    ?>

    <footer class="footer">
      &copy; 2022 | Kyle Maglaya
    </footer>
  </body>
</html>


