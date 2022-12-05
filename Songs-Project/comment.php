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


    <!-- Where user can post their comment -->
    <div class="write-comment">
      <h1>Comment</h1>
      <h3 id = "comment-h3">Post a comment</h3>
      <form action="http://localhost/2030_projectFinal/comment.php" method="post">
        <div>
          <!-- User inputs their name -->
          <p class = "comment-title">Your Name:</p>
            <label>
              <div class = "comment-text">
                <input type="text" name="name" class = "input">
              </div>
            </label>
          <!-- User inputs genre of song or album -->
          <p class = "comment-title">Album or Song Genre: </p>
            <label>
              <div class = "comment-text">
                  <input type="text" name="genre" class = "input">
              </div>
            </label>
          <!-- User inputs their comment and the song or album they like -->  
          <p class = "comment-title">Enter a comment with your favourite song or album!</p>
            <label>
              <textarea name="body"></textarea>
            </label>
          
          <button type="submit" name="button" id = "submit-button">Post Comment</button>
        </div>
      </form>
    </div>

    <footer class="footer">
      &copy; 2022 | Kyle Maglaya
    </footer>

  </body>
</html>


