<?php
	require_once 'conn.php';
	mysql_query(" SET NAMES 'utf8'" );
	$bookid=$_POST['ID'];
	$sql="select * from book where id='$bookid' ";
	$result=mysql_query($sql,$con);
	while($row=mysql_fetch_array($result)){
		$arr['rs']=array(
			'bookname'=>urlencode($row['bookname']),
			'author'=>urlencode($row['author']),
			'summary'=>urlencode($row['summary']),
			'bookimg'=>urlencode($row['bookimg']),
	//		'more'=>urlencode($row['more']),
			'type'=>urlencode($row['type']),
			'price'=>urlencode($row['price']),
			'oldprice'=>urlencode($row['oldprice']),
			'time'=>urlencode($row['pubtime']),
		);
	}
		echo urldecode(json_encode($arr));	
	
	
	
	
	
	
	
	
?>