<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="template/css/style.css">
   <style type="text/css">
      html, body {
        height: 100%;
      }
      body {
        display: flex;
        flex-direction: column;
        font: 14px sans-serif;
      }
      .content {
        flex: 1 0 auto;
      }
      .footer {
        flex-shrink: 0;
      }
      .form-card
      {
        width: 200px;
        margin: 0 auto;
      }
      .wrapper{
        width: 350px; padding: 20px;
      }
      
      img {
        display: inline;
      }
      .like-btn, .comment-btn {
        border: none;
        height: 20px;
      }
      .additional_information {
        display: inline;
      }
      header, footer {
        height: 50px;
        background-color: black;
      }
      .header_title {
        color: #fff;
      }
      .login_form, .register_form {
        width: 350px;
        padding: 20px;
      }
    </style>
</head>

<body>
  <header>
    <h1 class="header_title">CAMAGRU</h1>
  </header>
  <div class="content">
    

    <?php
    // FRONT CONTROLLER
    
    //general setup
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    
    //adding sys files
    define('ROOT', dirname(__FILE__));
    require_once(ROOT.'/components/Router.php');
    require_once(ROOT.'/components/Db.php');
    
    //database
    if (!Db::getConnection())
    {
      echo "connection failed";
      Db::createDb();
    }
    
    //router
    $router = new Router();
    $router->run();
    
    
    ?>


  </div>
  <footer class="footer"></footer>
</body>
</html>