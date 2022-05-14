<?php
function getExactQuarterByCurrentDate()
{
	$current_dt = date('Y-m-d');
	//$current_dt = '2022-01-01';
	$y = date('Y', strtotime($current_dt));
	$m = date('m', strtotime($current_dt));
	$d = date('d', strtotime($current_dt));
	if($m == '1' || $m == '2' || $m == '3'){
		$y = ($y - 1); 
		$q = 'Q4-'.$y;
	}else if($m == '4' || $m == '5' || $m == '6'){
		$q = 'Q1-'.$y;
	}else if($m == '7' || $m == '8' || $m == '9'){
		$q = 'Q2-'.$y;
	}else if($m == '10' || $m == '11' || $m == '12'){
		$q = 'Q3-'.$y;
	}else{
		$q = '';
	}
	return $q;
}// end -:- getQuarterByCurrentDate()

echo getExactQuarterByCurrentDate();

?>