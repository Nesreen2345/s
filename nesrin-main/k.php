
<?php
session_start();
include "db_conn.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title> تغيير كلمة المرور </title>
        <link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <div id="myDIV2">
          <input type="text" name ="id1" placeholder="رقم المستخدم" > <br><br>
          <input type="text" name ="name1" placeholder="اسم المستخدم"><br><br>
         <input type="text" name ="pass" placeholder="كلمة المرور "><br><br> </div>

         <button type="submit" name="mobyefy" onlick="modefy()">التعديل على البيانات</button>
         </from>
         <?php
         //update 
         if(isset($_POST['modefy'])){
            $id=$_POST['id'];
            $username1=$_POST['name1'];
            $passwordu=$_POST['pass'];

            $query="update users set user_name='$username1', password='$passwordu' where id='$id'";
            $result=mysqli_query ($conn,$query);
            if ($result){
                echo "updated done";
            }
            else {die('error');
            }

         }
         ?>
         </body>
         </html>


