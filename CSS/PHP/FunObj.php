<?php
//Chapter 7 - Practical PHP

printf("I an %d years old, which is %X in hexadecimal<br>", 34, 34);
//use it to generate color!
printf("<font color='#%X%X%X'>Hello</font> <br>", 65, 127, 245);


$r = 65; $g= 127; $b = 245;
/*
for ($i=0;$i<255;$i++)
{
	$r = $r +1;
	for ($j=0;$j<255;$j++)
	{
		$g= $g +1;
		for ($k=0;$k<255;$k++)
		{
			$b = $b + 1;
			printf("r = %d, g = %d, b = %d <font color='#%X%X%X'>Hello</font> <br>", $r, $g, $b ,$r, $g, $b);
		}
		$b = 0;
	}
	$g = 0;
}
$r = 0;

*/
echo "<b><u>Number padding and precision setting</b></u><br>";

echo "<pre>"; // Enables viewing of the spaces
// Pad to 15 spaces
printf("The result is $%15f\n", 123.42 / 12);
// Pad to 15 spaces, fill with zeros
printf("The result is $%015f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision
printf("The result is $%15.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with zeros
printf("The result is $%015.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
printf("The result is $%'#15.2f\n", 123.42 / 12);

echo "</pre>";

echo "<b><u>String padding and precision setting</b></u><br>";

echo "<pre>"; // Enables viewing of the spaces

$h = "House";
printf("[%s]\n", $h); // Standard string output
printf("[%10s]\n", $h); // Right justify with spaces
printf("[%-10s]\n", $h); // Left justify with spaces
printf("[%010s]\n", $h); // Zero padding
printf("[%'#10s]\n\n", $h); // Use the custom padding character '#'

$d = "Doctor House";
printf("[%10.8s]\n", $d); // Right justify, cutoff of 8 characters
printf("[%-10.6s]\n", $d); // Left justify, cutoff of 6 characters
printf("[%-'@10.6s]\n",  $d); // Left justify, pad '@', cutoff 6 chars

echo "</pre>";

$hexstring = sprintf("%X%X%X",$r, $g, $b);

echo "The hexadecimal value of $r, $g, $b is $hexstring <br>";

$out = sprintf("The result is: %.2f <br>", 123.42 / 12);

echo $out;

echo "The time now is : ";
echo time();
echo "<br>";
echo "The time next week is : ";
echo time() + (7 *24 * 60^2);
echo "<br>";
echo "The time on 1/1/2000 is : ";
echo mktime(0,0,0,1,1,2000);
echo "<br>";
date_default_timezone_set("Europe/London");
echo "The current date and time is : "; echo date("l F jS, Y :- g:ia", time());
echo "<br>";
echo date(DATE_RSS, time());
echo "<br>";

$month = 9; // September (only has 30 days)
$day = 30; // 31st
$year = 2012; // 2012

if (checkdate($month, $day, $year))
	echo "Date is valid";
else
	echo "Date is invalid";

echo "<br>";

//now the file functions

if (file_exists("testfile.txt")) echo "file exists<br>";

/*
//creating a file
$fh = fopen("textfile.txt",'w') or die("Failed to create file <br>");
$text = <<< _END
Line 1
Line 2
Line 3

_END;
fwrite($fh, $text) or die ("Could not write file <br>");
fclose($fh);
echo ("File written <br>");
*/

$fh=fopen("testfile.txt", 'r') or die("File cannot be opened <br>");
$text = fgets($fh);
fclose ($fh);
echo $text . "<br>";

echo file_get_contents("http://oreilly.com");


?>