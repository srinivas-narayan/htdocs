<?php
//Learning about php arrays
$nl = "<br />"; // use for new line

echo "<b><u> Numerical Arrays, using 'for' loop </u></b>". $nl;

//manually declare an array
$paper[] = "Copier"; $paper[] = "Inkjet"; $paper[] = "Laser"; $paper[] = "Photo";
//just print it to see it
//print_r($paper); echo $nl;

//use a loop
for ($j = 0 ; $j < 4 ; ++$j)
echo "$j: $paper[$j]<br />";


echo "<b><u>Associative Arrays </u></b>". $nl;

$paper['copier'] = "Copier & Multipurpose"; $paper['inkjet'] = "Inkjet Printer"; $paper['laser'] = "Laser Printer"; $paper['photo'] = "Photographic Paper- paper array";
echo "The location at 'laser' contains: "; echo $paper['laser']; echo$nl;
echo "Now the whole 'paper' array is as below: ".$nl;
print_r($paper); echo $nl;

echo "<b><u>Using the 'array' keyword</u></b>". $nl;

$p1 = array("Copier", "Inkjet", "Laser", "Photo");
echo "p1 element: " . $p1[2] . "<br>";

$p2 = array('copier' => "Copier & Multipurpose", 
			'inkjet' => "Inkjet Printer",
			'laser' => "Laser Printer", 
			'photo' => "Photographic Paper - ba ba");
echo "p2 element: " . $p2['photo'] . "<br>";

echo "<b><u>Using the 'foreach' loop on the 'paper' array</u></b>". $nl;
echo "<i>The index number is just indicative.. </i>". $nl;
$j = 0;
foreach ($paper as $item)
{
echo "$j: $item<br>";
++$j; 
}

echo "<i><u>Using the descriptor in 'foreach' loop </i> </u>" . $nl;
foreach ($paper as $item => $description)
echo "$item: $description<br>";

$item="nothing"; $description="nothing";

echo "<b><u>Using the 'while' loop with list</u></b>". $nl;
$pyaperz = array('copier' => "Copier & Multipurpose - pyaperz",
				'inkjet' => "Inkjet Printer- pyaperz", 
				'laser' => "Laser Printer- pyaperz", 
				'photo' => "Photographic Paper - pyaperz");


echo "<i>first the foreach loop:....</i><br>";
foreach ($pyaperz as $member =>$desc)
	echo "$member: $desc<br>";

reset($pyaperz); //this is what prevents blank printing in the while loop, by resetting
//the internal PHP pointer!!

echo "<i>now the while loop</i>" . $nl;
while (list($memb, $descr) = each ($pyaperz))
	echo "$memb: $descr<br>";

//for some strange reason, the above while loop does not work when the foreach loop
//executed beforehand - might be something to do with array traversal using list
//for it executes fine when the foreach loop is removed!


// this is now solved with the reset command above!!
//echo "Now the whole 'pyaperz' array is as below: ".$nl;
//print_r($pyaperz); echo $nl;
	
list($a, $b) = array ("Alice", "Bob");
echo "a=$a b=$b"; echo $nl;


echo "<b><u>Multidimensional arrays</u></b>". $nl;

$products = array(
	'paper' => array(
					'copier' => "Copier & Multipurpose", 
					'inkjet' => "Inkjet Printer", 
					'laser' => "Laser Printer",
					'photo' => "Photographic Paper"),
	'pens' => array(
					'ball' => "Ball Point", 
					'hilite' => "Highlighters", 
					'marker' => "Markers"),
	'misc' => array(
					'tape' => "Sticky Tape", 
					'glue' => "Adhesives", 
					'clips' => "Paperclips") 
				);
echo "<pre>";
foreach ($products as $section => $items)
foreach ($items as $key => $value)
echo "$section:\t$key\t($value)<br>";
echo "</pre>";

echo "<i><u>Chessboard:</i></u> <br>";

$chessboard = array(
	array('r', 'n', 'b', 'k', 'q', 'b', 'n', 'r'),
	array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
	array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
	array('R', 'N', 'B', 'K', 'Q', 'B', 'N', 'R')
				);
echo "<pre>";
foreach ($chessboard as $row)
{
	foreach ($row as $piece)
	echo "$piece "; echo "<br />";
}
echo "</pre>";

echo (is_array($chessboard) ? "Is an array" : "Is not an array"); echo $nl;
$cnt = count($chessboard[6]);
echo "The paper array has $cnt elements <br>";
echo "<pre>";
print_r($paper);
echo "</pre>";
if (sort($paper))
{
	echo "<pre>";
	print_r($paper);
	echo "</pre>";
}
if (shuffle($paper))
{
	echo "<pre>";
	print_r($paper);
	echo "</pre>";
}
$temp = explode(' ', "Srinivas Ananth Narayan Ranjini Kudli Nagaraja Aditya Srinivas Narayan"); 
print_r($temp);
$q= "Test value";
$q = extract($_GET, EXTR_PREFIX_ALL, 'fromget');

echo "This is the value of q: $q, $fromget_q <br>" ;

$j = 23;
$temp = "Hello"; 
$address = "1 Old Street"; 
$age = 61;
echo "<pre>";
print_r (compact (explode (' ','j temp address age'))); //use for debugging variable values
echo "</pre>";

?>