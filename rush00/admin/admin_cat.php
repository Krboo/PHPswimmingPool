<?php

session_start();
require_once("../redirect.php");
if($_SESSION['admin'] !== 1)
	redirect('index.php');
else {
	if(isset($_POST['modify']))
		redirect('admin/modify_cat.php');
	if(isset($_POST['delete']))
		redirect('admin/delete_cat.php');
	if(isset($_POST['add']))
		redirect('admin/add_cat.php');
}

 ?>

 <h1>Connection</h1>
 <form action="" method="post">
    Modifier: <input type="submit" name="modify"/><br/>
    Supprimer: <input type="submit" name="delete"/><br/>
    Ajouter: <input type="submit" name="add"/><br/>
</form>
