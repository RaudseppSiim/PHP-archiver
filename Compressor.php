<?php

	$input = "000001110101101";
	$output = compress($input);
	echo $input;
	echo "<br>";
	echo $output;
	$normal = decompresser($output);
	echo $normal;
	
	function compress($vastus)
	{
		$vastus = str_replace("0000","4",$vastus);
		$vastus = str_replace("000","3",$vastus);
		$vastus = str_replace("00","2",$vastus);
		
		
		$vastus = str_replace("1111","a",$vastus);
		$vastus = str_replace("111","b",$vastus);
		$vastus = str_replace("11","c",$vastus);
		
		
		return $vastus;
		
			
		
		
	}
	function decompresser($output)
	{
		$vastus = str_replace("4","0000",$vastus);
		$vastus = str_replace("3","000",$vastus);
		$vastus = str_replace("2","00",$vastus);
		
		
		$vastus = str_replace("a","1111",$vastus);
		$vastus = str_replace("b","111",$vastus);
		$vastus = str_replace("c","11",$vastus);
		
		
	}
?>