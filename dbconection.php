<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blog";

$conn = new mysqli($servername , $username, $password, $database);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];
    $query = "INSERT INTO posts (title, content, image) VALUES ('$title', '$content','$image')";
    $result = mysqli_query($conn, $query);

    if ($result) {
    $latestPostId = mysqli_insert_id($conn);
    $updateQuery = "UPDATE posts SET content = '$content' WHERE id = $latestPostId";
    $updateResult = mysqli_query($conn, $updateQuery);

    header("Location: index.php");
    exit();
    } else {
    echo "Error inserting the post: " . mysqli_error($conn);
    }
  }
?>