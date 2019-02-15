<?php
  class PostController
  {

    public function actionIndex()
    {
      echo "Post feed";
      return true;
    }

    public function actionView()
    {
      echo "One post";
      return true;
    }

  }
?>
