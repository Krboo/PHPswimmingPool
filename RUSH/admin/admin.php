
<?PHP
session_start();
if ($_SESSION['username']){

}
else
  header('Location: ../index.php');
?>
<link href="../style.css" type="text/css" rel="stylesheet"/>
  <h1>Bienvenue, <?php echo $_SESSION['username']; ?></h1>
