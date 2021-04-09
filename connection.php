<?php

	$db_config = array(
		'host' => 'localhost',
		'db' => 'framing_assistant',
		'user' => 'root',
		'pass' => ''
	);
	$con = mysqli_connect($db_config['host'], $db_config['user'], $db_config['pass'], $db_config['db']);

?>