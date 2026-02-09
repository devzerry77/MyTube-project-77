<?php
$videos = json_decode(file_get_contents("db.json"), true);
?>

<!DOCTYPE html>
<html>
<head>
  <title>MyTube</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
  <div class="logo">MyTube</div>
  <div class="search">
    <input placeholder="Search">
  </div>
</header>

<div class="videos">
<?php if($videos): foreach(array_reverse($videos) as $v): ?>
  <a href="watch.php?id=<?= $v['id'] ?>" style="text-decoration:none;color:white">
    <div class="video">
      <div class="thumbnail">
        <img src="<?= $v['thumbnail'] ?>">
      </div>
      <div class="info">
        <h3><?= htmlspecialchars($v['title']) ?></h3>
        <p><?= $v['views'] ?> views</p>
      </div>
    </div>
  </a>
<?php endforeach; endif; ?>
</div>

<script src="assets/script.js"></script>
</body>
</html>
