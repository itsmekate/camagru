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
      $username = $user['username'];
      $password = $user['password'];
      $confirm_password = $user['confirm_password'];
      $username_err = $user['username_err'];
      $password_err = $user['password_err'];
      $confirm_password_err = $user['confirm_password_err'];
      var_dump($user);
      require_once(ROOT.'/views/account/register.php');
      return true;
    }
  }

?>
