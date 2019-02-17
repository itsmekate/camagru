<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="container">

    <div class="tile is-ancestor is-9">
  <?php
  foreach ($postList as $postItem): ?>
    <div class="tile is-parent row">
      <article class="tile is-child box">
        <a href="<?php echo $postItem['id']; ?>">
          <strong><?php echo $postItem['user'];?></strong>
        </a>

        <small><?php echo $postItem['date'];?></small>
        <figure class="image is-256x256">
          <img src="<?php echo $postItem['image']; ?>" alt="Image">
        </figure>
        <input class="input is-rounded is-small" type="text">
        <span class="icon">
          <i class="fas fa-heart"></i>
        </span>
      </article>
  </div>

  <?php endforeach; ?>
      </div>
    </div>
</body>
</html>
