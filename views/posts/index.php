<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php foreach ($postList as $postItem):?>
  <?php
  echo $postItem['user'];
   ?>
  <!-- <a href="/post/ -->

  <?php
  // echo $postItemp['id'];
  ?>

  <!-- "></a> -->
  <!-- <div>
    <img src="" alt="">
  </div> -->

  <?php endforeach; ?>
</body>
</html>
