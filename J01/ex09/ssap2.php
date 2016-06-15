<?PHP
if ($argc >= 2)
{
	$chaine = "";
        foreach ($argv as $elem)
        {
                if ($elem != $argv[0])
                $chaine .= " $elem ";
        }
        $arr = preg_split('/[\s]+/', trim($chaine));
        natcasesort($arr);
        foreach($arr as $word)
        {if (ctype_alpha($word[0]))echo $word."\n";}
                sort($arr, SORT_STRING);
        foreach($arr as $word)
        {if (ctype_digit($word[0]))echo $word."\n";}
        foreach($arr as $word)
        {if (!ctype_alpha($word[0]) && !ctype_digit($word[0]))echo $word."\n";}
}
?>
