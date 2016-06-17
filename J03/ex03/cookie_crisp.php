<?PHP
if ($_GET["action"] == "set")
  if ($_COOKIE["name"] !== "")
    setcookie($_GET["name"], $_GET["value"], time() + 31536000);
if ($_GET["action"] == "get")
  if($_COOKIE[$_GET['name']])
    echo $_COOKIE[$_GET['name']] ."\n";
if ($_GET["action"] == "del")
    setcookie($_GET["name"], $_COOKIE["value"], time() - 31536000);
?>
