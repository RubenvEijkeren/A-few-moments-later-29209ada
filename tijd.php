<<?php
	$arr = explode(" ", $argv[1]);
//	var_dump($arr);
	$i = count($arr);
	$dagen = substr($arr[$i-4], 0, -1) * 86400;
	$uren = substr($arr[$i-3], 0, -1) * 3600;
	$minuten = substr($arr[$i-2], 0, -1) * 60;
	$seconden = substr($arr[$i-1], 0, -1);
	$totalsec = $dagen + $uren + $minuten + $seconden;
	echo $totalsec . " seconden\n";
?>