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
      return $db;

    } catch (PDOException $e) {
      echo 'Подключение не удалось: ' . $e->getMessage();
    }

    return 0;
  }
  public static function createDb()
  {
    $paramsPath = ROOT.'/config/db_params.php';
    $params = include($paramsPath);

    $dsn = "mysql:host={$params['host']};port={$params['port']};}";

    try {
        $db = new PDO($dsn, $params['user'], $params['password']);
        $sql = file_get_contents('./create_db');

        $qr = $db->exec($sql);
        $db->exec();

    } catch (PDOException $e) {
        die("DB ERROR: ". $e->getMessage());
    }
  }

}

?>
