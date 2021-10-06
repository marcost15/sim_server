<?php
//ob_start();
error_reporting(E_ALL & ~E_NOTICE);
include_once 'config.inc.php';
include_once 'forbId.php';

function myaddslashes($var){
		return addslashes($var);
}

function getmicrotime(){
    list($usec, $sec) = explode(" ",microtime());
    return ((float)$usec + (float)$sec);
}

$check_time=0;

class DB {

	function __construct(){
		global $dbhost,$dbuser,$dbpw,$dbname, $conn;
		$conn = mysqli_connect($dbhost,$dbuser,$dbpw,$dbname) or die("Could not connect");
		mysqli_set_charset($conn, 'utf8');
	}

	function query($sql) {
		global $check_time, $conn;
		if($check_time) $start_time=getmicrotime();
		$result=mysqli_query($conn, $sql) or die("$Bad query: ".mysqli_error($conn));
		$end_time=getmicrotime();
		if($check_time) $time=(getmicrotime()-$start_time)*1000;
		if($check_time) echo "<br>".$sql."(".$time."ms)";
		return $result;
	}

	function updatequery($sql) {
		global $conn;
		$result=mysqli_query($conn, $sql);
        return $result;
    }

	function fetch_array($query) {
		//global $conn;
		//$result = mysqli_query($conn, $query);
		return mysqli_fetch_array($query, MYSQLI_BOTH);
	}

	function fetch_assoc($query) {
		//global $conn;
		//$result = mysqli_query($conn, $query);
		return mysqli_fetch_assoc($query);
	}

	function num_rows($query) {
		return mysql_num_rows($query);
	}
	function real_escape_string($item){
		return mysql_real_escape_string($item);
	}
}

$db=new DB;
