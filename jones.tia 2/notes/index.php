<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	echo "hello";
	echo "$undefinedVariable";

	error_reporting(E_ALL);
	ini_set("display_errors", 0);

	function customErrorHandler($errno, $errstr, $errfile, $errline)
	{
		$message = "Error: [$errno] $errstr - $errfile:$errline";
		error_log($message . PHP_EOL, 3, "error_log.txt");
	}

	set_error_handler("customErrorHandler");

	?>
</body>
</html>
