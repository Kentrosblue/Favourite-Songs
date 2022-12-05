
<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="utf-8">
    <title>Cpsc 2030 Project</title>
    <link rel="stylesheet" href="style.css?">
  </head>
  <body class = "background">
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
    <h1>Home</h1>
    <!-- Photo grid with clickable images -->
    <div class="container">
      <div class="photo-grid">
        <div class = "column">
          <div class = "photo">
            <h3 class = "comment-title">Home</h3>
            <a href = "home.php"><img src="images/mixer2.jpg" width = "400" height = "300" alt = "mixer table"></a>
          </div>
          <div class = "photo">
            <h3 class = "comment-title">Songs</h3>
            <a href = "songs.php"><img src="images/mic.jpg" width = "400" height = "300" alt = "microphone"></a>
          </div>
        </div>

        <div class = "column">
          <div class = "photo">
            <h3 class = "comment-title">Comment</h3>
            <a href = "comment.php"><img src="images/phone2.jpg" width = "400" height = "300" alt = "Iphone"></a>
          </div>
          <div class = "photo">
            <h3 class = "comment-title">Posts</h3>
            <a href = "posts.php"><img src="images/studio.jpg" width = "400" height = "300" alt = "Music equipment"></a>
          </div>
        </div>

        <div class = "column">
          <div class = "photo">
            <h3 class = "comment-title">Documents</h3>
            <a href = "documentation.php"><img src="images/phone.jpg" width = "400" height = "300" alt = "Laptop and iphone"></a>
          </div>
          <div class = "photo">
            <h3 class = "comment-title">Hello!</h3>
            <img src="images/vinyl2.jpg" width = "400" height = "300" alt = "vinyl turn table">
          </div>
        </div>
      </div>
    </div>
  
    <footer class= "footer">
      &copy; 2022 | Kyle Maglaya
    </footer>
    
   
  </body>
</html>
