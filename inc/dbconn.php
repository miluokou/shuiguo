<?php

//创建数据库连接
		$servername = "localhost";
		$username = "root";
		$pw = "";
		$dbname = "youthmallmobile";

		$conn = new mysqli($servername,$username,$pw,$dbname);
		if ( $conn->connect_error ){
			die("连接失败：" . $conn->connect_error);
		}

?>