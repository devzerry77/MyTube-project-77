<?php
session_start();
if(!isset($_SESSION['admin'])) header("Location: login.php");
?>

<link rel="stylesheet" href="../assets/style.css">

<div class="admin-box">
  <h2>Dashboard</h2>
  <a href="upload.php">📤 Upload Video</a><br><br>
  <a href="logout.php">🚪 Logout</a>
</div>
