<?php
	/*数据库扩展
	/*if(function_exists('mysql_connect')){
		echo "数据库扩展已安装<br>";
	}*/
	/*数据库扩展有三种 官方原生，mysqli（增强版），pdo*/
	/*$link=mysql_connect('localhost','root','usbw');
	if($link){
		echo" offical success!<br>";
	}
	$link=mysql_connect('localhost','root','usbw');
	if($link){
		echo"增强版连接成功<br>";
	}
/*数据库连接*/
/*选择数据库*/
/*mysql_select_db("userdata",$link);
/*查询数据表
mysql_query('SELECT * FROM user_data username');

	$dsn="host=localhost";
	$usr="root";
	$pwd="usbw";
	$link=new PDO($dsn,$usr,$pwd);
	if($link){
		echo"PDO扩展成功！";
	}*/
$link=mysql_connect('localhost','root','usbw');
mysql_query('use chatroom');
?>