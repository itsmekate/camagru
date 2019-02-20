<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card-deck">
    <?php foreach ($postList as $postItem): ?>
    <div class="card" style="width: 20rem;">
    
      <div class="card-body">
        <!-- <div class="row"> -->
          <img src="<?php echo $postItem['image']; ?>" class="card-img-top" alt="...">
           <a href="post/view/<?php echo $postItem['id']; ?>">
          <h5 class="card-title"> <a href="post/view/<?php echo $postItem['id']; ?>"></h5>
          <p>
           <!--<?
           // php echo $postItem['date'];
           ?> -->
          </p>
          <p><?php echo  "num of comments ".$postItem['comments'] ; ?></p>
          <span class="icon">
                <!-- <i class="fas fa-heart"></i> -->
               <p><?php echo  "num of likes ".$postItem['likes'] ; ?></p>
              </span>
          <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
    </div>

  <?php endforeach; ?>
    </div>
  </div>
</body>
</html>
