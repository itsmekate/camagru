<?php

class Post
{

  public static function getPostItemById($id)
  {
    $id = intval($id);

    if($id)
    {
      $db = Db::getConnection();

      $result = $db->query('SELECT * from `Posts` WHERE id='.$id);

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

    $result = $db->query("SELECT * FROM `posts` ORDER BY date DESC LIMIT 10");

    $i = 0;
    while($row = $result->fetch())
    {
      $postList[$i]['id'] = $row['id'];
      $postList[$i]['user_id'] = $row['user_id'];
      $postList[$i]['date'] = $row['date'];
      $postList[$i]['image'] = $row['image'];
      $postList[$i]['likes'] = $row['likes'];
      $postList[$i]['comments'] = $row['comments'];

      $i++;
    }
          return $postList;
  }

  public static function createPost()
  {
    session_start();
    $comment = $image = "";
    $comment_err = $image_err = "";
    $user_id = $_SESSION["id"];
    $date = date("Y-m-d H:i:s");

    $db = Db::getConnection();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      var_dump($_POST);
         // if(empty(trim($_POST["comment"]))) {
           // $comment_err = "Please enter a comment.";
         // } else {
             // $comment = trim($_POST["comment"]);
         // }
        // if(empty(trim($_POST["image"]))){
            // $image_err = "Please upload an image.";
            // echo $image_err;
        // } else {
            $image = trim($_POST["image"]);
        // }
    // Check input errors before inserting in database
        if(empty($comment_err) &&
         empty($image_err)
        && !empty($user_id))
        {
            // $sql = "INSERT INTO posts (username, image, date, comment) VALUES (?,?,?,?)";
            // $stmt= $db->prepare($sql);
            try
            {
              $statement = $db->prepare(
               "INSERT INTO `posts` (`user_id`, `image`, `comments`, `likes`, `date`) VALUES (?, ?, ?, ?, ?)"
               );
              $statement->execute([$user_id, $image, 0, 0, '2019-02-20']);
            }
            catch (Exception $e){
                throw $e;
            }

            $post['username']=$_SESSION["username"];
            $post['image']=$image;
            $post['date']=$date;
            $post['comment']=$comment;
            $post['comment_err']=$comment_err;
            $post['image_err']=$image_err;
            // return $post;
          }
      }
     // echo "Something went wrong. Please try again later.";
    }
}

?>
