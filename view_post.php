<!-- view_post.php -->

<!DOCTYPE html>
<html>
<head>
  <title>View Post</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container bg-dark-subtle">
    <h1>Full Artical </h1>
    <hr>
    <?php
      
      include('dbconection.php');

      
      if (isset($_GET['id'])) {
        $postId = $_GET['id'];

        
        $query = "SELECT * FROM posts WHERE id = $postId";
        $result = mysqli_query($conn, $query);

        
        if (mysqli_num_rows($result) === 1) {
          $row = mysqli_fetch_assoc($result);
          $postTitle = $row['title'];
          $postContent = $row['content'];
         

          echo '<div class="post">';
          echo '<h2>' . $postTitle . '</h2>';
          
          echo '<p>' . $postContent . '</p>';
          echo '</div>';
        } else {
          echo '<p>Post not found.</p>';
        }
      } else {
        echo '<p>Invalid request.</p>';
      }
    ?>

    <a href="index.php" class="btn btn-primary">Back to Blog</a>
  </div>
</body>
</html>
