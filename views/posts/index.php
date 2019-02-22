<style type="text/css">
/*  img {
    display: inline;
  }
  button
  {
    border: none;
    height: 20px;
  }
  .additional_information
  {
    display: inline;
  }*/
</style>

<div class="container">

  <?php foreach ($postList as $postItem): ?>

  <div class="card" style="width: 20rem;">
    <div class="card-body">
      <div class=".col-md-3 .offset-md-6">
         <a href="post/view/<?php echo $postItem['id']; ?>">
          <img src="<?php echo $postItem['image']; ?>" class="card-img-top" alt="...">
         </a>
          <div class="additional_information">
            <button class="like-btn">
             <span class="icon">
               <i class="fas fa-comment"></i>
               <?php echo $postItem['comments'] ; ?>
             </span>
             </button>
             <button class="comment-btn">
               <span class="icon">
                 <i class="fas fa-heart"></i>
                 <?php echo $postItem['likes'] ; ?>
               </span>
           </button>
          </div>
          <h5 class="card-title"> <a href="post/view/<?php echo $postItem['id']; ?>" > </h5>
          <p>
           <!--<?
           // php echo $postItem['date'];
           ?> -->
          </p>
         </div>
        </div>
      </div>


  <?php endforeach; ?>
      </div>
</div>
</a>

