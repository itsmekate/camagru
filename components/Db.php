<?php

class Db
{

  public static function getConnection()
  {
    $paramsPath = ROOT.'/config/db_params.php';
    $params = include($paramsPath);


    $dsn = "mysql:host={$params['host']};port={$params['port']};dbname={$params['dbname']}";

    try {

      $db = new PDO($dsn, $params['user'], $params['password']);
    } catch (PDOException $e) {
      echo 'Подключение не удалось: ' . $e->getMessage();
    }

    return $db;
  }

}

?>
