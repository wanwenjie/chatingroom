<!DOCTYPE html>
<html>
<head>
  	<meta charset=UTF-8>
  	<link rel="stylesheet" href="css/bootstrap-master\dist\css\bootstrap.min.css">
	<meta name="viewpoint" content="width=device-width,initial-scale=1.0,usr-scalable=no" >
	<link rel="stylesheet" href="css/custom_1.css">
	<script src="js/jquery.min.js"></script>
	<title>chat</title>
	
</head>
<body>
	<div class="container" id="wapper">
		<div class="line visible-on">
			在哪呢这个div
		</div>
		<div class="row visible-on" >
			<div id="showbx">
			</div>
			<div id="br"></div>
			<form action="chat.php" method="post">
				<div id="inputbx">			
						<textarea name="text" class="" cols="81" rows="5"></textarea>				
				</div>
				<div id="func">
					<button id="btn_1" class="btn btn-sm btn-info">退出聊天系统</button>
					<input  type="submit" id="btn_2" class="btn btn-sm btn-info" role="button" value="发送信息">
				</div>
			</form>
		</div>
	</div>
</body>
<script>
	$(document).ready(function(){
		$("#btn_1").click(function(){
			$("#wapper").fadeOut();
			/*document.getElementById('wapper').style.display="none";*/
		});		
	});
</script>

<?php 
//配置该页最久执行时间
/*set_time_limit(0);
//打开输出缓冲区
ob_start();
//重复4000个空白行
$pad=str_repeat(" ", 4000);
echo $pad."<br/>";
ob_flush();
flush();
$link=mysql_connect("localhost","root","usbw");
mysql_query("use chatroom");
mysql_query("set names utf8");
if ($_POST['text']!='') {
	$sql="insert into msg (id,content,flag,from,to) values(null,'$_POST[text]',0,'root','admin')";
	mysql_query($sql,$link);
	echo "语句插入到数据库成功";
}
else{
	echo "<script>alert('输入聊天内容'');</script>";
}
$tem='';
while(1){
	$sql1="select * from msg where flag=0";
	$result=mysql_query($sql1,$link);
	$rs=mysql_fetch_array($result);

	if($rs['content']!=''){
		echo $pad."<br/>".$rs['content'];        
		mysql_query("update msg set flag=1 where content='$_POST[text]'");
	}
	ob_flush();
	flush();
	sleep(0.5);
}*/


?>
