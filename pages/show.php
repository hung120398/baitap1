<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quản lý người dùng</title>
    <link rel="stylesheet" href="asset/css/css.css">
</head>
<body>
         <table>
            <tr>
              <th>username</th>
              <th>password</th>
              <th>Action</th>
            </tr>
            <?php 
            for($i=0; $i<count($_SESSION['user']); $i++ ) {
        
              echo '<tr>';
              echo '<td>'.$_SESSION['user'][$i]['user'].'</td>';
              echo '<td>'.$_SESSION['user'][$i]['password'].'</td>';
              echo "<td><button><a href='?page=edit&i=".$i."'>EDIT</a><button>
              <form action='' method='post'>
              <input type='submit' name='delete' value='delete'>
               </form>";
              echo '</tr>';
            }
            
            ?>
          
            </table>
           
 
       
</body>

</html>