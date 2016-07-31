
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap-master\dist\css\bootstrap.min.css">
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0,usr-scalable=no" >
	<link rel="stylesheet" href="css/custom.css">
	<script src="js/jquery.min.js"></script>
	<title>登录moon</title>
</head>
<body>
	<div class="container">
		<h3>MOON 聊天室</h3>
		<div id="br"></div>
		<form action="index.php" method="post" class="form-horizontal" role="form">
			<input type="text" name="user_name" class="form-control" id="username" placeholder="用户名" size="20">
			<div class="col-lg--10">
			<input type="password" name="pass_word"class="form-control" id="password" placeholder="密码" size="20">		
			</div>
			<div class="firlogin">
				<input id="loginbtn" class="btn btn-info btn-sm" role="button" type="submit" value="登录">
				<a href="sign.html" id="signbtn" class="btn btn-info btn-sm" role="button">注册</a>
			</div>
		</form>
	</div>
</body>

</html>
<?php
//不出现notice
ini_set('error_reporting', E_ALL ^ E_NOTICE );

ini_set('display_errors', '0');
//连接数据库
$link=mysql_connect('localhost','root','usbw');
mysql_query('use chatroom');
/*
if ($_POST['pass_word']) {
	echo '<script>alert("密码不能为空");</script>';
}*/
$usr=mysql_query("select * from usr where username='$_POST[user_name]'");
$result=mysql_fetch_array($usr);
//判断用户登陆的行为是否正确
if ($_POST['user_name']!='') {
	
	if($_POST['user_name']!=$result['username']){
		echo '<script>alert("用户名输入错误");</script>';
	}
	else if ($_POST['pass_word']!=$result['password']) {
			echo '<script>alert("密码输入错误");</script>';
		}
		else{
			header("location:chat.php");
		}
}


?>