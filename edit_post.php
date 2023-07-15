<?php

  include('dbconection.php');

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $postId = $_GET['id'];

    $query = "SELECT * FROM posts WHERE id = $postId";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $postTitle = $row['title'];
      $postContent = $row['content'];
     
    } else {
      
      header("Location: index.php");
      exit();
    }
  } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $postId = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];


    $query = "UPDATE posts SET title = '$title', content = '$content' WHERE id = $postId";
    mysqli_query($conn, $query);

    
    header("Location: index.php");
    exit();
  } else {
    
    header("Location: index.php");
    exit();
  }
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Post</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Edit Post</h1>

    <form method="POST" action="edit_post.php">
      <input type="hidden" name="id" value="<?php echo $postId; ?>">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $postTitle; ?>" required>
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" rows="5" required><?php echo $postContent; ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</body>
</html>

