<?PHP
function ft_split($chaine)
{
  $arr = array_filter(explode(" ", trim($chaine)));
  sort($arr);
  return $arr;
}
?>
