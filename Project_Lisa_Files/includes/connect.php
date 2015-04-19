<?php
$connect = mysql_connect('localhost','USERNAME','PASSWORD');
if(!$connect){
	die( 'Could not connect'.mysql_error() );
}

$db_selected = mysql_select_db("DATABASE_NAME");
if(!$db_selected){
	die( 'Could not select database'.mysql_error() );
}
?>