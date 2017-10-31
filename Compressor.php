<?php

	$input = file_get_contents('binaar.txt');;
	$output = compress($input);
	echo $input;
	echo "<br>";
	echo $output;
	echo "<br>";
	$normal = decompresser($output);
	echo $normal;
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	fwrite($myfile, $output);
	
	function compress($vastus)
	{
		$vastus = str_replace("0000","4",$vastus);
		$vastus = str_replace("000","3",$vastus);
		$vastus = str_replace("00","2",$vastus);
		
		
		$vastus = str_replace("1111","a",$vastus);
		$vastus = str_replace("111","b",$vastus);
		$vastus = str_replace("11","c",$vastus);
		$vastus = str_replace("01","d",$vastus);
		$vastus = str_replace("10","e",$vastus);
		
		return $vastus;
		
			
		
		
	}
	function decompresser($output)
	{
		$output = str_replace("4","0000",$output);
		$output = str_replace("3","000",$output);
		$output = str_replace("2","00",$output);
		
		
		$output = str_replace("a","1111",$output);
		$output = str_replace("b","111",$output);
		$output = str_replace("c","11",$output);
		$output = str_replace("d","01",$output);
		$output = str_replace("e","10",$output);
		return $output;
		
	}
?>