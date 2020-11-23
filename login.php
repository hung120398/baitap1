<?php
    
    session_start();
    
    if(isset($_POST['submit'])) {
        include "data.php";
        $remember = '';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user     = [
            'user' => $username,
            'password' => $password,
        ];
        $remember = $_POST['remember'];
        if($remember==='remember') {
        setcookie('user'    , $username, time()+86400);
        setcookie('password', $password, time()+86400);
        
        $_SESSION['user'][0] = $user;
       
        login($_COOKIE['user'], $_COOKIE['password']);
        print_r($_SESSION);
        } else {
            $_SESSION['user'][0] = $user;
            login($username, $password);
           
           
        }
  
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="asset/css/css.css">
</head>
<body>
    <div class="login">
        <div>
            Login <br><br>
        </div>
            <form action="" method="post">
                <label for="username">username</label>
                <input  class="nut" type="text" name="username" placeholder="username" id="username" ><br><br>
                <label for="password">password</label>
                <input class="nut" type="password" name="password" placeholder="password" id="password"><br><br>
                <input  class="nut2" type="checkbox" name="remember" value="remember" >remember me <br><br>
                <input type="submit" name="submit" value="submit" class="button"><br>
            </form>
        </div>
</body>
 <?php
 if(isset($_COOKIE['user']) and isset($_COOKIE['password'])) {
     $username = $_COOKIE['user'];
     $password = $_COOKIE['password'];
     echo "<script>
     document.getElementById('username').value= '$username';
     document.getElementById('password').value = '$password';
     
     </script>";
 }
 ?>
</html>