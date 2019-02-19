<?php

  class Model
  {
    public function getData()
    {
      
    }
    public static function addLike($post_id, $user_id)
    {
    	 $db = Db::getConnection();
    	 $sql = "INSERT INTO `Like` (`post_id`, `user_id`) VALUES (?,?)";
         $stmt= $db->prepare($sql);
         $stmt->execute([$post_id, $user_id]);

    }
    public static function removeLike($post_id, $user_id)
    {
    	 $db = Db::getConnection();
    	 $sql = "DELETE FROM `Like` WHERE `post_id` = ".$post_id."`user_id` = ".$user_id;
         $stmt= $db->prepare($sql);
         $stmt->execute();

    }
    public static function addComment($post_id, $user_id, $comment)
    {
    	 $db = Db::getConnection();
    	 $sql = "INSERT INTO `Comment` (`post_id`, `user_id`, `comment`) VALUES (?,?, ?)";
         $stmt= $db->prepare($sql);
         $stmt->execute([$post_id, $user_id, $comment]);

    }
    public static function removeComment($post_id, $user_id)
    {
    	 $db = Db::getConnection();
    	 $sql = "DELETE FROM `Comment` WHERE `post_id` = ".$post_id."`user_id` = ".$user_id;
         $stmt= $db->prepare($sql);
         $stmt->execute();
    }
  }
?>
