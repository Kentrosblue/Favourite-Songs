
<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="utf-8">
    <title>Cpsc 2030 Project</title>

    <link rel="stylesheet" href="style.css?" type = "text/css">
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

    <h1>Documentation</h1>
    <div>
        <h3>Instructions how to use website: </h3>
        <ul>
            <li>
                On the <a href = "songs.php" class = "doc-link">songs</a> page, it displays a song from an artists i like with a little description
                taken from wiki. There is a next and prev button that will go through the songs and will 
                update each time.
            </li>
            <li>
                In the <a href = "comment.php" class = "doc-link">comment</a> page the user puts in their name, the genre of the song theyre adding,
                and lastly the name of the song and a comment if they would like to. The user must click on 
                submit (which has a transformation feature)  for it to go on the database and posted on the posts page.
            </li>
            <li>
                In the <a href = "posts.php" class = "doc-link">posts</a> page the users submission will be displayed as well as other submissions,
                 it includes everything the user put and the date they submitted it.
            </li>
            <li>
                In the <a href = "home.php" class = "doc-link">home</a> page which includes a moving background animation. As well here the users can 
                click on the images and they will take the user to that respective page, ex: click on the picture with the post header and it will take you to post.
            </li>
        </ul>

        <ul>
            <!-- images used -->
            <h3>Images used</h3>
            <li>Korpai, Daniel. “Phone.” Unsplash, Unsplash, 8 Apr. 2019, https://unsplash.com/photos/oWiEeTIxYvk. </li>
            <li>Korete, A. (2016). Vinyl. unsplash.com. Retrieved from https://unsplash.com/photos/5gn2soeAc40. </li>
            <li>Stamler, J. (2016). College St. Studio. Unsplash. Retrieved from https://unsplash.com/photos/k3heD_KwH0A. </li>
            <li>Mingle, M. (2016). Vinyl. Unsplash. Unsplash. Retrieved from https://unsplash.com/photos/HRyjETL87Gg. </li>
            <li>Mihaylov, B. (2018). Mic. Unsplash. Unsplash. Retrieved from https://unsplash.com/photos/ekHSHvgr27k. </li>
            <li>Tušar, S. (2016). Mixer. Unsplash. Unsplash. Retrieved from https://unsplash.com/photos/QtgGYlug6Cw. </li>
            <li>McLeod, D. (2018). Mixer. Unsplash. Unsplash. Retrieved from https://unsplash.com/photos/VRdZBLqnoMU. </li>
            <li>Ilyahov, Maxim. “Phone and Laptop.” Unsplash, Unsplash, 17 Mar. 2020, https://unsplash.com/photos/0aRycsfH57A. </li>
        </ul>

    <h3>ScreenShots</h3>
    <!-- Screenshots of the validation -->
    <div class="container">
      <div class="photo-grid">
        <div class = "column">
          <div class = "photo">
            <h3 class = "comment-title">Validation CSS</h3>
            <img src="images/validateCss.jpg" width = "400" height = "300" alt = "css validation">
          </div>
          <div class = "photo">
            <h3 class = "comment-title">Song validation</h3>
            <img src="images/validateSongs.jpg" width = "400" height = "300" alt = "songs validation">
          </div>
        </div>

        <div class = "column">
          <div class = "photo">
            <h3 class = "comment-title">Comment validation</h3>
            <img src="images/validateComment.jpg" width = "400" height = "300" alt = "comments validation">
          </div>
          <div class = "photo">
            <h3 class = "comment-title">Posts validation</h3>
            <img src="images/validatePosts.jpg" width = "400" height = "300" alt = "posts validation">
          </div>
        </div>

        <div class = "column">
          <div class = "photo">
            <h3 class = "comment-title">Documents validation</h3>
            <img src="images/validateDoc.jpg" width = "400" height = "300" alt = "Documentation validation">
          </div>
          <div class = "photo">
            <h3 class = "comment-title">Home validation</h3>
            <img src="images/vaidateHome.jpg" width = "400" height = "300" alt = "Home validation">
          </div>
        </div>
      </div>
    </div>

    </div>

    <footer class="footer">
      &copy; 2022 | Kyle Maglaya
    </footer>
  </body>
</html>


