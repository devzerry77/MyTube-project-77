<?php
session_start();
if(!isset($_SESSION['admin'])) header("Location: login.php");

if($_POST){
  $db = json_decode(file_get_contents("../db.json"), true);

  $vidPath = "uploads/videos/".time().$_FILES['video']['name'];
  $thumbPath = "uploads/thumbnails/".time().$_FILES['thumb']['name'];

  move_uploaded_file($_FILES['video']['tmp_name'], "../".$vidPath);
  move_uploaded_file($_FILES['thumb']['tmp_name'], "../".$thumbPath);

  $db[] = [
    "id" => time(),
    "title" => $_POST['title'],
    "video" => $vidPath,
    "thumbnail" => $thumbPath,
    "views" => 0
  ];

  file_put_contents("../db.json", json_encode($db));
}
?>

<link rel="stylesheet" href="../assets/style.css">

<div class="admin-box">
  <h2>Upload Video</h2>
  <form method="post" enctype="multipart/form-data">
    <input name="title" placeholder="Video title">
    <input type="file" name="video" required>
    <input type="file" name="thumb" required>
    <button>Upload</button>
  </form>
</div>
