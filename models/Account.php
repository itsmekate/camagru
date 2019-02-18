<?php

class Account
{
  // private $username;
  // private $username_err;
  // private $password;
  // private $password_err;

  public static function getName()
  {
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if(empty(trim($_POST["username"]))){
          $username_err = "Please enter username.";
        } else{
          $username = trim($_POST["username"]);
        }
      return $username;
    }
  }

  public static function getPassword()
  {
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
      } else{
        $password = trim($_POST["password"]);
      }
      return $password;
    }
  }

  public static function getUser($username)
  {

    try
    {
      $db = Db::getConnection();
      $result = $db->query('SELECT * from users WHERE password=1111');

      $result->setFetchMode(PDO::FETCH_ASSOC);

      if($row = $result->fetch())
      {
        $user['id'] = $row['id'];
        $user['username'] = $row['username'];
        $user['password'] = $row['password'];
        $user['email'] = $row['email'];
        $user['name'] = $row['name'];
        $user['surname'] = $row['surname'];
        // $user[$i]['image'] = $row['image']
      }
      // print_r ($user);
      return $user;

    } catch (PDOException $e){
      echo "Unable to connect to DB!".$e->getMessage();
    }

  }

  public static function Login()
  {
    $username = Account::getName();

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    // if(empty($username_err) && empty($password_err)){
      $user = Account::getUser($username);

      // var_dump($user);

      // if(password_verify($user['password'], $hashed_password)){
      //                     // Password is correct, so start a new session
      //                     session_start();
      //
      //                     // Store data in session variables
      //                     $_SESSION["loggedin"] = true;
      //                     $_SESSION["id"] = $id;
      //                     $_SESSION["username"] = $username;
      //
      //                     // Redirect user to welcome page
      //                     // require_once(ROOT.'/views/posts/post.php');
      //                 } else{
      //                     // Display an error message if password is not valid
      //                     $password_err = "The password you entered was not valid.";
      //                 }
    // }
    // if ($user)
    // {
      // require_once(ROOT.'/views/posts');
    // }
    return $user;
  }

  }
  public function Logout()
  {
    session_start();
    $_SESSION = array();
    session_destroy();
    require_once(ROOT.'/views/account/login.php');
  }

  public static function Register(){

    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";
    $db = Db::getConnection();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Validate username
        if(empty(trim($_POST["username"])))
        {
          $username_err = "Please enter a username.";
        }
        else
        {
          $sql = "SELECT id FROM users WHERE username = ?";

          $param_username = trim($_POST["username"]);

          $stmt= $db->prepare($sql);
          $r = $stmt->execute([$param_username]);

          echo $r;
          if ($r != 1)
          {
            $username_err = "This username is already taken.";
            echo $username_err;
          }
          else
          {
            $username = trim($_POST["username"]);
            echo $username;
          }
        }
        // Validate password
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter a password.";
            echo $password_err;
        }
        elseif(strlen(trim($_POST["password"])) < 6)
        {
            $password_err = "Password must have atleast 6 characters.";
            echo $password_err;
        }
        else
        {
            $password = trim($_POST["password"]);
            echo $password;
        }
        // Validate confirm password
        if(empty(trim($_POST["confirm_password"])))
        {
            $confirm_password_err = "Please confirm password.";
            echo $confirm_password_err;
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($password_err) && ($password != $confirm_password))
            {
                $confirm_password_err = "Password did not match.";
                echo $confirm_password_err;
            }
        }
    //
    //     // Check input errors before inserting in database
        if(empty($username_err)
        && empty($password_err)
        && empty($confirm_password_err))
        {
            $sql = "INSERT INTO users (name, surname) VALUES (?,?)";
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt= $db->prepare($sql);
            $stmt->execute([$param_username, $param_password]);

            $user['username']=$username;
            $user['password']=$password;
            $user['confirm_password']=$confirm_password;
            $user['username_err']=$username_err;
            $user['password_err']=$password_err;
            $user['confirm_password_err']=$confirm_password_err;
            return $user;
          }

     // echo "Something went wrong. Please try again later.";
    }
  }
}
?>
