<?php

  class Model
  {
    public function getData()
    {
      
    }
    public static function addLike($post_id, $user_id)
    {
    	 $db = Db::getConnection();
    	 $sql = "INSERT INTO `likes` (`post_id`, `user_id`) VALUES (?,?)";
         $stmt= $db->prepare($sql);
         $stmt->execute([$post_id, $user_id]);

    }
    public static function removeLike($post_id, $user_id)
    {
    	 $db = Db::getConnection();
    	 $sql = "DELETE FROM `likes` WHERE `post_id` = ".$post_id."`user_id` = ".$user_id;
         $stmt= $db->prepare($sql);
         $stmt->execute();

    }
    public static function addComment($post_id, $user_id, $comment)
    {
    	 $db = Db::getConnection();
    	 $sql = "INSERT INTO `comments` (`post_id`, `user_id`, `comment`) VALUES (?,?, ?)";
         $stmt= $db->prepare($sql);
         $stmt->execute([$post_id, $user_id, $comment]);

    }
    public static function removeComment($post_id, $user_id)
    {
    	 $db = Db::getConnection();
    	 $sql = "DELETE FROM `comments` WHERE `post_id` = ".$post_id."`user_id` = ".$user_id;
         $stmt= $db->prepare($sql);
         $stmt->execute();
    }
  }
?>
