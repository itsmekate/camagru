<div class="card" style="width: 20rem;">
    
      <div class="card-body">
          <img src="<?php echo $postItem['image']; ?>" class="card-img-top" alt="...">
            <a href="view/<?php echo $postItem['id']; ?>"></a>
          <h5 class="card-title"> <a href="post/view/<?php echo $postItem['id']; ?>"></h5>
            <div class="additional_information">
                <button class="comment-btn">
                <span class="icon">
                  <i class="fas fa-comment"></i>
                  <p><?php echo $postItem['comments'] ; ?></p>
                </span>
              </button>
              <button class="like-btn">
                  <span class="icon">
                    <i class="fas fa-heart"></i>
                  </span>
                  <p><?php echo $postItem['likes'] ; ?></p>
              </button>
            </div>          
        </div>
    </div>
