<?php

class Post
{

  public static function getPostItemById($id)
  {
    $id = intval($id);

    if($id)
    {
      $db = Db::getConnection();

      $result = $db->query('SELECT * from post WHERE id='.$id);
      // $result->setFetchMode(PDO::FETCH_NUM);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $postItem = $result->fetch();

      return $postItem;
    }
  }

  public static function getPostList()
  {
    $db = Db::getConnection();

    $postList = array();

    $result = $db->query('SELECT id, user, date, image '
                        .'FROM posts');
                        // .'ORDER BY date DESC'
                        // .'LIMIT 10');

    $i = 0;
    while($row = $result->fetch())
    {
      $postList[$i]['id'] = $row['id'];
      $postList[$i]['user'] = $row['user'];
      $postList[$i]['date'] = $row['date'];
      $postList[$i]['image'] = $row['image'];

      $i++;
    }
          return $postList;
  }

}

?>
