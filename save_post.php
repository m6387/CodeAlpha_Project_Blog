<?php
  include('dbconection.php');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $title = $_POST['title'];
    $content = $_POST['content'];

    

    
    $query = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    mysqli_query($conn, $query);

    
    header("Location: index.php");
    exit();
  }
?>

