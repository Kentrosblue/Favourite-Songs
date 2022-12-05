<?php
// Output comments to HTML
function the_comments() {
  global $posts;

  foreach($posts as $row){
    echo
    '<div class = "full-comment">';

    echo
    '<div class = "comment">';

    echo
    '<div class = "date">'.
    'Posted on: '. $row['date'].
    '</div>';

    echo
    '<h3> Comment by: '. $row['name'].
    '</h3>';
    
    echo
    '<div class = "body">'.
    '<p class = "genre"> Genre: ' . $row['genre']. '</p>'.
    '</div>';

    echo
    '<div class = "body">'.
    '<p> &nbsp; &nbsp; &nbsp; '. $row['body']. '</p>'.
    '</div>';

    echo '</div></div>';
  }
}

