<?php
	echo "This is toInclude.php and the value of sdate() is: "; echo sdate(); echo "<br>";
	echo "_______________________________________________***________________________ <br>";
	
function sdate()
{
	//echo "This is line " . __LINE__ . " of file " . __FILE__ . " in method   " . __METHOD__ ."()<br />";
	return (date("r")); //note function has to return value, or set global variable
}
?>