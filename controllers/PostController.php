<?php
include_once ROOT.'/models/Post.php';

  class PostController
  {

    public function actionIndex()
    {
      $postList = array();
      $postList = Post::getPostList();

      require_once(ROOT.'/views/posts/index.php');

      return true;
    }

    public function actionView($user, $id)
    {
      if($id)
      {
        $postItem = Post::getPostItemById($id);
        require_once(ROOT.'/views/posts/post.php');
        // var_dump($postItem);
      }
      return true;
    }

    public function actionCreate()
    {
      Post::createPost();
      require_once(ROOT.'/views/posts/create.php');
    }

  }
?>
