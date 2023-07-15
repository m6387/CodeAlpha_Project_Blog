
<!DOCTYPE html>
<html>
<head>
  <title>My Blog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styel.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand btn btn-link" href="index.php">
    <img src="photo.jpeg" alt="bootstrap" width="30" height="30"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_post.php">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        
      </ul>
    </div>
  </nav>

  <div class="container">
  <p class="moving-text ">Welcom To My Blog</Blog> </p>

    <h1 class="animate-left-to-right "> <Center>Latest Posts</Center></h1>
    <hr>

    
    <?php
      
      include('dbconection.php');

      $query = "SELECT * FROM posts ORDER BY id DESC";
      $result = mysqli_query($conn, $query);

  
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $postId = $row['id'];
          $postTitle = $row['title'];
          $postContent = $row['content'];
           $createdAt = $row['created_at'];
         
           if (isset($row['updated_at'])) {
            $updatedAt = $row['updated_at'];
          } else {
            $updatedAt = 'N/A'; 
          }

          echo '<div class="post">';
          echo '<h4>' . $postTitle . '</h4>';
          
        
          echo '<p>' . $postContent . '</p>';
          echo '<p>' . substr($postContent, 0, 0) . '...</p>';
          echo '<p><strong>Created At:</strong> ' . date('F j, Y H:i:s', strtotime($createdAt)) . '</p>'; 
      
          

          echo '<a  class="btn btn-secondary " href="view_post.php?id=' . $postId . '">Read More..</a>';
          echo '<a class="btn btn-primary mx-3" href="edit_post.php?id=' . $postId . '">Edit</a>  ';
          echo '<a class="btn btn-danger  mx-3" href="delete_post.php?id=' . $postId . '">Delete</a>';
          echo '</div>';
        }
      } else {
        echo '<p>No posts found.</p>';
      }
    ?>

  
    
  </div>
  <header id="about" class="bg-light">
    <div class="container">
      <h1 class="animate-fade-in" >About Me</h1>
      <img src="photo.jpeg" alt="About Me Image" width="100px"  height="5px" class="img-fluid">

      
      <p id="typing-text"></p>
      
    </div>
  </header>

  <section id="contact" class="bg-light">
    <div class="container">
      <h2>Contact Me</h2>
      <form method="post" action="contact.php">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-secondary">Send Message</button>
      </form>
    </div>
  </section>

  <footer class="bg-dark text-white text-center">
    <div class="container py-3">
      &copy; 2023 My Portfolio. All rights reserved.
    </div>
  </footer>
  <script>
    const typingText = "Welcome to my portfolio website! I am a web developer with a passion for creating beautiful and functional websites. With several years of experience in front-end development and a strong background in HTML, CSS, and JavaScript, I strive to build responsive and user-friendly websites that deliver an excellent user experience. I enjoy keeping up with the latest web technologies and constantly expanding my skill set. Feel free to explore my portfolio and get in touch with me for any inquiries or collaborations.";

const typingSpeed = 25; 

let textIndex = 0;
let currentText = "";

function type() {
  if (textIndex < typingText.length) {
    currentText += typingText.charAt(textIndex);
    document.getElementById("typing-text").innerHTML = currentText;
    textIndex++;
    setTimeout(type, typingSpeed);
  }
}

type();
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
