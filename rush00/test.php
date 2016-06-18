<?php

	session_start();
	var_dump($_SESSION['login']);
	if($_SESSION['login'] == "alban")
		echo "yeah baby";
	else {
		echo "bof";
	}

 ?>
