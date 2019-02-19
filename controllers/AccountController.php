<?php
include_once ROOT.'/models/Account.php';

  class AccountController
  {
    public function actionIndex()
    {
      // echo "actionIndex";
        // $user = Account::Login();
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
      $name = $user['name'];
      $surname = $user['surname'];
      $email = $user['email'];
      $password = $user['password'];
      $confirm_password = $user['confirm_password'];
      $username_err = $user['username_err'];
      $name_err = $user['name_err'];
      $surname_err = $user['surname_err'];
      $email_err = $user['email_err'];
      $password_err = $user['password_err'];
      $confirm_password_err = $user['confirm_password_err'];

      // $user = Account::Reset();
      require_once(ROOT.'/views/account/register.php');

      return true;
    }

     public function actionLogin()
    {
      $user = Account::Login();
      $username = $user['username'];
      $password = $user['password'];
      $username_err = $user['username_err'];
      $password_err = $user['password_err'];

      require_once(ROOT.'/views/account/login.php');

      return true;
    }
  }

?>
