<?
  class HomeController
  {
    public function actionIndex()
    {
      require_once(ROOT.'views/posts/index.php');

      return true;
    }
  }

?>
