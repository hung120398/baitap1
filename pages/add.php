
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm người dùng</title>
</head>
<body>
<link rel="stylesheet" href="asset/css/css.css">
    <div class='login'>
        <div>
            ADD <br><br>
        </div>
        <form action="" method="post">
        <label for="username">username</label>
        <input type="text" value="username" id='username' name="username"><br>
        <label for="password">password</label>
        <input type="text" value="password" id='password' name="password"><br>
        <input type="submit" name="submit" value="submit" class="button"><br>

        </form>
    <?php
      
    if(isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user     = [
            'user'     => $username,
            'password' => $password,
        ];
     
        array_push($_SESSION['user'],$user);
        header('location: ?pages=show');
   
    }
    ?>
    </div>
</body>
</html>