<?php
require 'config.php';
function db_connect(){
        //create conenction
        try{     
            $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
            $user = DBUSER;    $pass = DBPASS;
      
            $pdo = new PDO($connectionString, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;;
        }
        catch (PDOException $e)
        {
          die($e->getMessage());
        }
        
}

//Handling form submission
function submit_post() {
    global $pdo;
  
  if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      
        $sql = 'INSERT INTO comments ( name, genre, body, date)
                VALUES (:name, :genre, :body, :date)';
        
        $date = date('Y-m-d');
        $statement = $pdo->prepare($sql); 
        $statement->bindValue(':name', $_POST['name']);
        $statement->bindValue(':genre', $_POST['genre']);
        $statement->bindValue(':body', $_POST['body']);
        $statement->bindValue(':date', $date);
        $statement->execute();
    }
}
  
//Get user comment
function get_posts() {
    global $pdo;
    global $posts;
  
    $sql = "SELECT * FROM comments";
    $result = $pdo->query($sql);
  
    while($row = $result->fetch()){
      $posts[] = $row;
    }
  }

