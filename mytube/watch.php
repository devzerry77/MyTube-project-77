<?php
$videos = json_decode(file_get_contents("db.json"), true);
$id = $_GET['id'] ?? 0;

foreach ($videos as &$v) {
  if ($v['id'] == $id) {
    $v['views']++;
    $video = $v;
    break;
  }
}
file_put_contents("db.json", json_encode($videos));
?>

<!DOCTYPE html>
<html>
<head>
  <title><?= $video['title'] ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
  <a href="index.php" class="logo">MyTube</a>
</header>

<div class="player">
  <video controls autoplay>
    <source src="<?= $video['video'] ?>">
  </video>
  <h2><?= htmlspecialchars($video['title']) ?></h2>
  <p><?= $video['views'] ?> views</p>
</div>

</body>
</html>
