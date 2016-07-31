<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dbconnect</title>
</head>
<body>
	
</body>
</html>
<?php

//连接数据库
$link=mysql_connect('localhost','root','usbw');
mysql_query('use chatroom');
$u=$_POST['username'];
$p=$_POST['password'];
//注册用户
//验证用户名是否已经存在，若不存在，就存入数据库，若不存在报错
////验证用户是否存在
$usr=mysql_query("select * from usr where username='$_POST[username]'");
$result=mysql_fetch_array($usr);
if($_POST['username']==''){
	echo '<script>alert("用户名不能为空");</script>';
}
else if($_POST['username']==$result['username']){
	echo '<script>alert("用户名已存在");</script>';
}
else{
	$sql = "insert into usr (id,username,password) values(null,'".$u."','".md5($p)."')";
	echo "用户注册成功！";
	mysql_query($sql,$link);
}
#目标
#使用ajax实现无刷新效果
#在sign.php页面不跳转的情况下，既能够将数据post到本页面，也能返回sign.php注册成功

?>