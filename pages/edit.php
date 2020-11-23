<?php 
    if(isset($_GET['i'])) {
        $i = $_GET['i'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm người dùng</title>
</head>
<body>
<link rel="stylesheet" href="../asset/css/css.css">
    <div class='login'>
        <div>
            EDIT <br><br>
        </div>
        <form action="" method="post">
        <label for="username">username</label>
        <input type="text" value="<?php echo $_SESSION['user'][$i]['user'];?>" id='username' name='username'><br>
        <label for="password">password</label>
        <input type="password" value='<?php echo $_SESSION['user'][$i]['password'];?>' id='password' name='password'><br>
        <input type="submit" value='EDIT' name='edit'>
        </form>
    </div>
    <?php 
    if(isset($_POST['edit'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $_SESSION['user'][$i]['user']     = $user;
        $_SESSION['user'][$i]['password'] = $pass;
        header('location: ?pages=show');
    }
    
    ?>
</body>
</html>