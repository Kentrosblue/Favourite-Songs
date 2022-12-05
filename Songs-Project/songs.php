 
<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="utf-8">
    <title>Cpsc 2030 Project</title>
    <link rel="stylesheet" href="style.css?">
    <script src="js.js"></script>
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

  <h1>Songs</h1>
  <!--Personal song favourites with wiki text-->
  <div style = "text-align: center;">
    <img id = "song" src = "images/mic.jpg" width = "500" height = "300" alt = "mic">
    <figcaption id = "imgCaption">
      <div class = "song-desc">
        Artist: <h2>Bruno Mars</h2> My favourite song by him right now is <b>Smoking out the Window</b>, 
        I would recommend a listen. Some info about Bruno Mars: Peter Gene Hernandez (born October 8, 1985), 
        known professionally as Bruno Mars, is an American singer, songwriter, and record producer. He is known 
        for his stage performances, retro showmanship, and for performing in a wide range of musical styles, including 
        pop, R&B, funk, soul, reggae, disco, and rock. Mars is accompanied by his band, the Hooligans, who play a variety 
        of instruments, and also serve as backup singers and dancers.<br><br> <a href = https://en.wikipedia.org/wiki/Bruno_Mars>Wiki</a>
      </div>
    </figcaption>
    <br>
    <!-- Next and prev buttons -->
    <button id = "prev" onclick="prevImage()">Prev</button>
    <button id = "next" onclick="nextImage()">Next</button>
  </div>
  
  <footer class="footer">
    &copy; 2022 | Kyle Maglaya
  </footer>
  </body>
</html>


