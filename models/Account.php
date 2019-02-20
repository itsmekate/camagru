<?php

class Account
{
  public static function getName()
  {
    $username = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if(!empty(trim($_POST["username"]))){
          $username = trim($_POST["username"]);
      }
    }
    return $username;
  }

  public static function getPassword()
  {
    $password = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if(!empty(trim($_POST["password"]))){
        $password = trim($_POST["password"]);
      }
    }
    // echo $password;
    return $password;
  }

  public static function getUser($username)
  {
    try
    {
      $db = Db::getConnection();
      $sql = "SELECT * FROM `user` WHERE `username` = ".$username;
      $res = $db->query($sql);

      if (!$res)
      {
        echo "here1";
        return 0;
      }
      else if($row = $res->fetch())
      {
        $user['id'] = $row['id'];
        $user['username'] = $row['username'];
        $user['password'] = $row['password'];
        $user['email'] = $row['email'];
        $user['name'] = $row['name'];
        $user['surname'] = $row['surname'];
        // $user[$i]['image'] = $row['image']
        echo "here2";
         return $user;
      }
    } catch (PDOException $e){
      echo "Unable to connect to DB!".$e->getMessage();
    }
    echo "here";
    return 0;
  }

  public static function Login()
  {
    
    $user['username'] = "";
    $user['password'] = "";
    $user['username_err'] = "";
    $user['password_err'] = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $user['username'] = Account::getName();
      if (empty($user['username'])) // check thay username is filled
      {
        $user['username_err'] = "Please enter a username.";
        return $user;
      }

      $user['password'] = Account::getPassword();
      if (empty($user['password'])) //check that account exists
      {
        $user['password_err'] = "Please enter your password.";
        return $user;
      }

      $full_user = Account::getUser($user['username']); // check that user exists

      var_dump($full_user);
      
      if (!$full_user)
      {
         $user['username_err'] = "User doesn't exist";
         return $user;
      }

      // $hashed_pass = password_hash($user['password'], PASSWORD_DEFAULT);

      // if($user['username'] && $user['password'] && password_verify($full_user['password'], $hashed_pass))
      // {
        // session_start();
        // $_SESSION["loggedin"] = true;
        // $_SESSION["id"] = $id;
        // $_SESSION["username"] = $username;
        // echo "LOGGED IN";
        // Redirect user to welcome page
        // require_once(ROOT.'/views/posts/post.php');
       // } 
       // else 
       // {
           // $user['password_err'] = "The password you entered was not valid.";
        // }   
    }
    return $user;
  }


  public function Logout()
  {
    session_start();
    $_SESSION = array();
    session_destroy();
    require_once(ROOT.'/views/account/login.php');
  }

  public static function  Reset()
  {
     $user['username'] = 0;
     $user['name'] = 0;
     $user['surname'] = 0;
     $user['email'] = 0;
     $user['password'] = 0;
     $user['confirm_password'] = 0;
     $user['username_err'] = 0;
     $user['name_err'] = 0;
     $user['surname_err'] = 0;
     $user['email_err'] = 0;
     $user['password_err'] = 0;
     $user['confirm_password_err'] = 0;
    return $user;
  }

  public static function Register(){

    $username = $password = $confirm_password = $email = $name = $surname = "";
    $username_err = $password_err = $confirm_password_err = $name_err = $surname_err = $email_err = "";
    $validated = 0;
    $db = Db::getConnection();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty(trim($_POST["username"])))
        {
          $username_err = "Please enter a username.";
        }
        else
        {
          $param_username = trim($_POST["username"]);
          // $sql  = ;
          $r = $db->query("SELECT `id` FROM `user` WHERE `username` = ".$username);
          // $r->fetch();
          // $stmt= $db->prepare($sql);
          // $r = $stmt->execute([$param_username]);
          var_dump($r);

          if ($r)
          {
            $username_err = "This username is already taken.";
          }
          else
          {
            $username = trim($_POST["username"]);
            $validated++;
          }
        }
        if(empty(trim($_POST["email"]))){
            $email_err = "Please enter a email.";
        }
        else
        {

          $param_email = trim($_POST["email"]);
          $sql = "SELECT `id` FROM `user` WHERE `email` = ".$param_email;
          $r = $db->query($sql);


          // $sql = "SELECT id FROM `User` WHERE `email` = ?";

          // $param_email = trim($_POST["email"]);

          // $stmt= $db->prepare($sql);
          // $r = $stmt->execute([$param_email]);

          if ($r)
          {
            var_dump($r);
            $email_err = "This email is already registered.";
            // echo $email_err;
          }
          else
          {
            $email = trim($_POST["email"]);
            $validated++;
          }
        }

        if(empty(trim($_POST["fname"])))
        {
          $name_err = "Please enter a name.";
        }
        else
        {
           $name = trim($_POST["fname"]);
           $validated++;
        }

        if(empty(trim($_POST["surname"])))
        {
          $surname_err = "Please enter a surname.";
        }
        else
        {
           $surname = trim($_POST["surname"]);
            $validated++;
        }

        // Validate password
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter a password.";
        }
        elseif(strlen(trim($_POST["password"])) < 6)
        {
            $password_err = "Password must have atleast 6 characters.";
        }
        else
        {
            $password = trim($_POST["password"]);
            $validated++;
        }
        // Validate confirm password
        if(empty(trim($_POST["confirm_password"])))
        {
            $confirm_password_err = "Please confirm password.";
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
             $validated++;
            if(empty($password_err) && ($password != $confirm_password))
            {
                $confirm_password_err = "Password did not match.";
                 $validated--;
            }
        }

     // Check input errors before inserting in database
        if( $validated == 6 && empty($username_err)
            && empty($email_err)
            && empty($password_err)
            && empty($name_err)
            && empty($surname_err)
            && empty($confirm_password_err))
        {
          echo "ADDED";
            $sql = "INSERT INTO `User` (`username`, `password`, `surname`, `email`, `name`) VALUES (?,?,?,?,?)";
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt= $db->prepare($sql);
            $stmt->execute([$param_username, $param_password, $surname, $param_email, $name]);
          }

            $user['username']=$username;
            $user['password']=$password;
            $user['email']=$email;
            $user['name']=$name;
            $user['surname']=$surname;
            $user['confirm_password']=$confirm_password;
            $user['username_err']=$username_err;
            $user['email_err']=$email_err;
            $user['password_err']=$password_err;
            $user['name_err']=$name_err;
            $user['surname_err']=$surname_err;
            $user['confirm_password_err']=$confirm_password_err;
            return $user;
    }
    else
      return 0;
  }
}
?>
