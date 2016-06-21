<?php

require_once("../redirect.php");
session_start();
	if($_SESSION['admin'] !== 1)
	{
		redirect('index.php');
	}
	else
	{
		if(isset($_POST['user']))
			redirect('admin/add_user.php');
		if(isset($_POST['prod']))
			redirect('admin/add_cat.php');
		if(isset($_POST['deluser']))
			redirect('admin/delete_user.php');
		if(isset($_POST['delprod']))
			redirect('admin/delete_prod.php');
	}
 ?>

 <html>

 <body>

 	<form method="post" action="admin_panel.php">
 	Delete User: <input type="submit" name="deluser" value="go">
 	Delete Prod: <input type="submit" name="delprod" value="go">
 	</form>
 	<form method="post" action="admin_panel.php">
 	Add User: <input type="submit" name="user" value="go">
 	Add Prod: <input type="submit" name="prod" value="go">
 	</form>
 </body>
<a href="../prod.php" >Retourner au shop</a>
 </html>
