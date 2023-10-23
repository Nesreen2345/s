

<?php 
session_start();

include "db_conn.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>تسجبل الدخول</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>تسجيل الدخول</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		
		
     	<label>اسم المستخدم</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>كلمه المرور </label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">دخول</button>
		<a href="Signup.php">انشاء حساب</a>
		<a href="k.php">تغيير كلمة المرور </a>
		<a href="f.php">اضافة تعليق</a>

     </form>
</body>
</html>