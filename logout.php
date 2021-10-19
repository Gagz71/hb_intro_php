<?php
	
	
	include 'includes/header.php';
	
	echo $_SESSION['email'];
	
	session_destroy();
	
	header("Location: index.php?disconnected=1");
	
	
	
