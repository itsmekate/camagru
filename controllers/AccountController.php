<?php
include_once ROOT.'/models/Account.php';

  class AccountController
  {
    public function actionIndex()
    {
      // echo "actionIndex";
        $user = Account::Login();
        require_once(ROOT.'/views/account/login.php');
        // var_dump($postItem);

      return true;
    }

    public function actionView($user, $id)
    {
      echo "actionView";
      // if($id)
      // {
      //   $postItem = Post::getPostItemById($id);
      //   require_once(ROOT.'/views/posts/post.php');
      //    var_dump($postItem);
      // }
      // return true;
    }

    public function actionRegister()
    {
      $user = Account::Register();
      require_once(ROOT.'/views/account/register.php');
    }
  }

?>
