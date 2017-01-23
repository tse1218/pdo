<?php
function conn()
{
	$root		= "";
	$root_pwd	= "";
	$db		= "";
	
	$dsn_db='mysql:host=localhost;dbname='.$db.';charset=utf8';
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
	
	global $conn;
	try{$conn = new PDO($dsn_db,$root,$root_pwd);$conn -> exec("set names utf8");}
	catch(PDOException $e){die( "oops!DB error!" /*"DB-table ERROR: ". $e->getMessage()*/) ;}	
}
function cls_conn()
{
	$res = null;
	$conn = null;
}
?>
