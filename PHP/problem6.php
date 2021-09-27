<?php
	$arr = array();
	$arr2 = []; 
	$students = array("dip","upal","karim");

	$arr[0] = 1;
	$arr[1] = 2;

	$arr2[] = 3; 
	$arr2[] = 5; 
	$arr2[] = 6; 
	
	$students[] = "Samir";
	$students[] = "Barun";
	
	
	for($i=0; $i<count($arr);$i++){
		echo $arr[$i]." ";
	}
	
	foreach($arr2 as $e){
		echo "$e ";
	}
	
	
	$arr4 = array();
	$arr5 = []; 
	$arr6 = array("dip"=>35,"upal"=>36,"karim"=>37);
	$arr7 = array("dip"=>"797As","upal"=>"dsgfr7","karim"=>"sddfg?");
	
	$arr4["dip"] = 35;
	$arr4["upal"] = 36;
	$arr4["karim"] = 37;
	
	echo "<br>Roll of dip is " .$arr4["upal"];
	
	
	
	
	
	
	
	
	
	
	
	
?>