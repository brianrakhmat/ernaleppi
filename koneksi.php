<?php
	$server='localhost';
	$user='root';
	$pass='';
	$db='spk-laptop26';


	$con=mysql_connect($server,$user,$pass);
	if($con){
		$selectdb=mysql_select_db($db);

	}
?>
