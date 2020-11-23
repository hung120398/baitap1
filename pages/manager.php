<?php 
session_start();
if(isset($_GET["page"]))
	{
		$page = $_GET["page"];
	} else {
		$page ="";	
	}

$count = 0;

if(isset($_SESSION['user'][0])) {
  

} else {
  header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang chính</title>
    <link rel="stylesheet" href="../asset/css/css.css">
</head>
<body>
    <div class='banner'>
        <div class="dropdown">
            <button class="dropbtn"><?php echo $_SESSION['user'][0]['user'];?></button>
            <div class="dropdown-content">
            <a href="?page=add">Add</a>
            <a href="?page=logout">logout</a>
            <a href="?page=show">quản lý người dùng</a>
            </div>
          </div>
    
    </div>
    <div >
        <br>
        <br>
       <?php
        switch($page) {
            case "add" : include 'add.php';
            break;
            case "logout": include 'logout.php';
            break;
            case "show": include 'show.php';
            break;
            case "edit": include 'edit.php';
            break;
            default:include 'show.php';
        }

       ?>

    </div>
       
</body>

</html>