<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="stylesheet" type="text/css" href="template/css/style.css"> -->
<!--    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px;}
            .card-form {margin: 0 auto;}
    </style> -->
</head>
<body>

</body>
</html>

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
