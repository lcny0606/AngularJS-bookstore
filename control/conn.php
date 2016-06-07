<?php
	$con=mysql_connect('localhost','root','');
	if(!$con){
		die('Coluld not connect'.mysql_error());
	}
	mysql_select_db('bookstore',$con)
?>