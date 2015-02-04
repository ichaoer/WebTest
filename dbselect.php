<?php
	$dbname = "fce";
	$dbtable = "stuinfo";
	$sqlstring = "select * from ".$dbtable;
	$dbconn = mysqli_connect("localhost","root","123456");
	if($dbconn == FALSE)
	{
		//die();
		die("数据库服务器连接失败"); 
	}
	$result = mysqli_select_db($dbconn, $dbname);
	if($result == FALSE)
	{
		die("数据库选择失败");
	}
	
	
	//print $dbconn;
	$result = mysqli_query($dbconn, $sqlstring);
	if($result == FALSE)
	{
		dir("数据库查询失败");
	}


	//<table>
	//<tr><th>id</th><th>name</th></tr>
	$rownum = mysqli_num_rows($result);
	if($rownum)
	{
		while($row = mysqli_fetch_array($result)){
		$id = $row['id'];
		$name = $row['name'];
		echo "<br>";
		echo " $id    $name ";
		}
		
	}
	//var_dump($result);
	/*
	while($row = $result->fetch_array()){
		echo $row[0];
	}
	*/
	
	mysqli_close($dbconn);
		
	
?>
