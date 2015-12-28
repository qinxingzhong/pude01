<?php
		 $conn=mysql_connect("localhost:3306","root","pude2015")or die("数据库连接失败");
		mysql_select_db("shiti")or die("选择数据库失败");
		mysql_query("set names utf8");
		$file="ti";
		$f=fopen($file,"r");//打开文件
		while(!feof($f))
		{
			$str=fgets($f);
		//	echo "读出:".$str."<br/>";
			$sql="insert into ti (ti) values ('".$str."')";
			mysql_query($sql);
		} 
?>
<html>
		<head>
				<meta charset="utf-8">
		</head>
		<body>
				<form action="duqu.php" method="post">
						<input type="submit" value="试题读取">
				</form>
		</body>
</html>
