#!/usr/bin/php
<?PHP
if ($argc >= 2)
{
  $chaine = "";
  foreach ($argv as $elem)
  {
    if ($elem != $argv[0])
      $chaine .= " $elem ";}
      $arr = array_filter(explode(" ", trim($chaine)));
    natcasesort($arr);
    foreach($arr as $word)
    {
      if (($word[0] >= 'a' && $word[0] <= 'z') || ($word[0] >= 'A'  && $word[0] <= 'Z'))
        echo $word."\n";
    }
    sort($arr);
    foreach($arr as $word)
    {
      if (is_numeric($word[0]))
        echo $word."\n";}
    foreach($arr as $word)
   {
   if (!(($word[0] >= 'a' && $word[0] <= 'z') || ($word[0] >= 'A'  && $word[0] <= 'Z')) && !is_numeric($word[0]))
      echo $word."\n";
    }
    }
?>
