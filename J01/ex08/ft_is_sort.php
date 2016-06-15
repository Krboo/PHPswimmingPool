<?PHP

	function ft_is_sort($sort)
{
	$count = 0;
	$default = $sort;
	sort($sort);
	foreach ($sort as $elem)
	{
		if ($elem != $default[$count])
			return FALSE;
		$count++;
	}
	return TRUE; 
}
?>
