<?php
$result = makeQuery(
			makeConn(),
			"SELECT `id`, `name` FROM `products` ORDER BY `date_create`"
		);

function print_p($v) {
	echo "<pre>",print_r($v),"</pre>";
}


function file_get_json($filename)  {
	$file = file_get_contents($filename);
	return json_decode($file);
}




//Connection function
include "auth.php";
function makeConn() {
	$conn = new mysqli(...MYSQLIAuth());
	if ($conn->connect_errno) die($conn->connect_error);
	$conn->set_charset('utf8');
	return $conn;
	}


//Error Check Query
function makeQuery($conn,$qry) {
	$result = $conn->query($qry);
	if($conn->errno) die($conn->error);
	$a = [];
	while($row = $result->fetch_object()) {
		$a[] = $row;
	}	
	return $a;
        }