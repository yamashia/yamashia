<?php

function db_connect(){
	$dsn = 'mysql:dbname=sddb0040218534;host=sddb0040218534.cgidb;charset=utf8';
  $username = 'sddbMTI5NTE3';
  $password = '#R1e2p3o4';

	try{
		$dbh = new PDO($dsn, $username, $password);
		return $dbh;
	}catch (PDOException $e){
	    	print('Error:'.$e->getMessage());
	    	die();
	}
}
