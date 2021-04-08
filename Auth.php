<?php
	// Check active session
	session_start();
	if (!$_SESSION['user']) {
		header("location:log.php");
	}