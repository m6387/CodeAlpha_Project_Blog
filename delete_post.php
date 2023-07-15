<?php
    include('dbconection.php');
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
      $postId = $_GET['id'];
  
      $query = "DELETE FROM posts WHERE id = $postId";
      mysqli_query($conn, $query);
  
      
      header("Location: index.php");
      exit();
    } else {
      
      header("Location: index.php");
      exit();
    }
  ?>
