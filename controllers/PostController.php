<?php
include_once ROOT.'/models/Post.php';

  class PostController
  {

    public function actionIndex()
    {
      $postList = array();
      $postList = Post::getPostList();

      require_once(ROOT.'/views/posts/index.php');

      // print_r($postList);
      return true;
    }

    public function actionView($user, $id)
    {
      if($id)
      {
        $postItem = Post::getPostItemById($id);
        print_r($postItem);
      }
      return true;
    }

  }
?>
