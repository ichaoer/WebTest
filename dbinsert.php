

<?php
	$dbname = "fce";
	$dbtable = "stuinfo";
	$sqldelete = "delete from ".$dbtable. " where id = '2' ";
	$sqlquery = "select * from ".$dbtable;
	$sqlinsert = "INSERT INTO `".$dbname."`.`".$dbtable."`(`id`, `name`, `score`, `info`) VALUES ('77', 'zxAf', '66', 'AAAA')";
	//$sqlinsert = "INSERT INTO `fce`.`stuinfo` (`id`, `name`, `score`, `info`) VALUES ('99', 'zxf', '66', 'zhangxiaofeng')";	
	print "INSERT INTO `fce`.`stuinfo` (`id`, `name`, `score`, `info`) VALUES ('6', 'zxf', '66', 'zhangxiaofeng')";	
	print "<br>";
	print $sqlinsert;
	print "<br>";

	$dbconn = mysqli_connect("localhost","root","123456");
	if($dbconn == FALSE)
	{
		//die();
		die("数据库服务器连接失败"); 
	}
	$retdb = mysqli_select_db($dbconn, $dbname);
	if($retdb == FALSE)
	{
		echo "mysql_error()";
		die("数据库选择失败");
	}

	
	//print $dbconn;
	
	$result = mysqli_query($dbconn, $sqlinsert);
	if($result == FALSE)
	{
		echo mysqli_error($dbconn);
		die("数据库iNSERT失败");
	}
	
	/*
	//mysqli_free_result($dbconn);
	//$dbconn = mysqli_connect("localhost","root","123456");
	
	$result = mysqli_query($dbconn, $sqlquery);
	if($result == FALSE);
	{
		echo mysqli_error($dbconn);
		die("数据库查询失败");
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
	*/
	//var_dump($result);
	/*
	while($row = $result->fetch_array()){
		echo $row[0];
	}
	*/
	
	mysqli_close($dbconn);
		
	
?>
