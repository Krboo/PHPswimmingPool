<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
<?php
	$file = json_decode(file_get_contents('../database/db_prod.json'), TRUE);
	foreach ($file as $key => $value) {
			echo '<img class="miniature" src="' . $value["img"] .  '"alt="img"  height="400px" width="400px"/>';
		//var_dump($file['name']);
	}
 ?>
	</body>
</html>
