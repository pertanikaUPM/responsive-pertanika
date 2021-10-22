<?php
function open()
{
	$host = "127.0.0.1";
	$user = "root";
	$pswd = "pertanika";
	$database = "pertanika";
	$connection = new mysqli($host, $user, $pswd, $database) or die("Fail to connect: %s\n" . $connection->error);

	return $connection;
}

function close($connection)
{
	$connection->close();
}
