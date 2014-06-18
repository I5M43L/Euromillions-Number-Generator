<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<title>Euromillions numbers generator</title>
</head>
<body>
<p> Your Euromillions Numbers</p>
<?php
	$arr = array();
		while ( count($arr) < 5 ) {
    	$x = mt_rand(1,50);
    		if ( !in_array($x,$arr) ) { $arr[] = $x;};	 
		}
		asort($arr);
		foreach ($arr as $key => $value) {
		echo "<div class=\"coin\">$value<br></div>"; }			
?>
<p> Lucky Stars </p>
<?php
	$arr = array();
		while ( count($arr) < 2 ) {
    	$x = mt_rand(1,11);
    		if ( !in_array($x,$arr) ) { $arr[] = $x;};
    	}	
    	asort($arr);
    	foreach ($arr as $key => $value) {
    		echo "<div class=\"coinlucky\">$value<br></div>";
		}
?>

<!-- <p><input type="button" value="click to generate your numbers" onClick="window.location='euromillions.php' "></p> -->
<p><button type="button"  class="css3button" onClick="window.location='euromillions.php' ">click to generate your numbers</button></p>
<!-- <button type="button"  class="button" onClick="window.location='euromillions.php' ">click to generate your numbers</button> -->
</body>

</html>