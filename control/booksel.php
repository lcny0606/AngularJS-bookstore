<?php
	require_once "conn.php";
	mysql_query(" SET NAMES 'utf8'" );
	$sql="select * from book  ";
	$result=mysql_query($sql,$con);
	while($row=mysql_fetch_array($result)){
		$arr['rs'][]=array(
			'id'=>urlencode($row['id']),
			'bookname'=>urlencode($row['bookname']),
			'author'=>urlencode($row['author']),
			'summary'=>urlencode($row['summary']),
			'bookimg'=>urlencode($row['bookimg']),
			'type'=>urlencode($row['type']),
			'price'=>urlencode($row['price']),
			'oldprice'=>urlencode($row['oldprice'])
		);
	}
		echo urldecode(json_encode($arr));
	

     
  
?>