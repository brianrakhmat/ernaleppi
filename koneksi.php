<?php
	$server='sunankalijaga.org';
	$user='sunankal_icidnew';
	$pass='Brian0897';
	$db='sunankal_icidnew';


	$con=mysql_connect($server,$user,$pass);
	if($con){
		$selectdb=mysql_select_db($db);

	}
?>
