#!/usr/bin/php
<?php
function ft_epur_str($str)
{
  $new = explode(" ", $str);
  $new = array_filter($new);
  $new = array_merge($new);
  return ($new);
}

function ft_print_array($array)
{
  $nb_case = count($array);
  for ($j = 1; $j < $nb_case  ; $j++)
    echo ($array[$j])." ";
  echo ($array[0])."\n";
}

if ($argc > 1)
  ft_print_array(ft_epur_str($argv[1]));
?>
