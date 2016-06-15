<?PHP
function ft_split($chaine)
        {
                $arr = preg_split('/[\s]+/', trim($chaine));
                sort($arr);
                return $arr;
        }
?>
