<?php

	$input = "000001110101101";
	$output = compress($input);
	echo $output;
	$normal = decompresser($output);
	echo $normal;
	
	function compress($argument)
	{
		//kui järjestus on 10 või yle 10 sama symboli tuleb vahele ' näide 12'0. 
		//for annab array sümboli, see lisatakse ajutisse stringi, mis lisatakse lõpp stringi.
		//if laused kontrollivad millal temp fail nullitakse,
		//strval muudab countsyb'i stringiks
		$array = array($argument);
		$tempsymb = "";
		$countsyb = 0;
		for($i = 0;$i > Count($array);$i++)
		{
			if($array[$i] == 0 and $array[$i+1]!=1)
			{
				$countsyb++;
				$tempsymb ="0";
			}
			if($array[$i] == 1 and $array[$i+1]!=0)
			{
				$countsyb++;
				$tempsymb = "1";
			}
			if($array[$i] == 1 and $array[$i+1]==1)
			{
				$countsyb++;
			}
			if($array[$i] == 0 and $array[$i+1]==0)
			{
				$countsyb++;
			}
			
			$output = strval(countsyb) + tempsymb;
			
		}
		return $output;
	}
	function decompresser()
	{
		
		
		
	}
?>