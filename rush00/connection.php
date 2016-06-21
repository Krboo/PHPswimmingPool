<?php
require_once("includes/header.php");
require_once("redirect.php");
$login = $_POST['login'];
$passwd = $_POST['passwd'];
$admin = $_POST['admin'];
$file = json_decode(file_get_contents('database/db_user.json'));
if(isset($_SESSION['login']))
{session_destroy();echo "Deconnexion en cours";redirect('index.php');exit();}
$_SESSION['login'] = NULL;
if ($_POST['submit'] === "OK")
{
  if ($_POST['login'] !== "" && $_POST['passwd'] !== "")
  {
    $fresh['login'] = $_POST['login'];
    if (!$_POST['passwd'] || !$_POST['login'])
    {
      echo "Veuillez remplir les champs";
      redirect("connection.php");
    }
    if ($file)
    {
        foreach ($file as $key)
        {
          if($key->login == $_POST['login'] && $key->passwd == hash('whirlpool', $_POST['passwd']))
          {
            $_SESSION['login'] = $key->login;
            $_SESSION['admin'] = $key->admin;
            echo "Vous etes connecte";
            redirect('index.php');
            exit();
          }
          else
          {
            echo "mauvais identifiants";
            redirect("connection.php");
            exit();
          }
        }
    }
  }
  echo "Veuillez remplir les champs";
}?>

 <link href="style/style.css" type="text/css" rel="stylesheet"/>
 <br/><h1>Connection</h1>
 <form action="" method="post">
  Identifiant: <input type="text" name="login"/><br/>
  Mot-de-passe: <input type="password" name="passwd"/><br/>
  <input type="submit" name="submit" value="OK"/>
