<?php
session_start();
if(isset($_POST['user'])){
  if($_POST['user']=="admin" && $_POST['pass']=="1234"){
    $_SESSION['admin']=true;
    header("Location: dashboard.php");
  }
}
?>

<link rel="stylesheet" href="../assets/style.css">

<div class="admin-box">
  <h2>Admin Login</h2>
  <form method="post">
    <input name="user" placeholder="Username">
    <input name="pass" type="password" placeholder="Password">
    <button>Login</button>
  </form>
</div>
