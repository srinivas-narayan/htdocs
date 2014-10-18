<?php
//+++++++++++functions and class definitions begin here++++++++++++

class User
{
	const E = 2.71828;
	const SPANISH = 37037;
	//above are constant declarations
	public $name;
	public $api = 3.141927; // constant only, no function or expression
	static $i=0;
	
	function __construct($param1, $param2)
	{
		//Constructor
		
		echo "Created Class USER <br/>";
	}
	
	//The below function basically DOESE NOT WORK!
	function set_user($uname)
	{
		
		echo "Inside function save_user()... <br />";
		$name = $uname;
		return ($this->name);
		
	}
	function get_user()
	{
		echo "The Value of E is " . self::E . "<br/>" ;
		echo "The Value of SPANSH is ". self::SPANISH . "<br/>";
		
		return ($this->name);
	}
	//note the static function below
	static function print_name()
	{
		$i = $i + 1; //increment every time this function is run...
		echo "This is the name printer from a static function! running $i times(s)<br/>";
	}
	function __destruct()
	{
		echo "Class USER Destructor <br/>";
	}
}

function fix_names(&$n1, &$n2, &$n3) //& = pass by reference
{
	$n1 = ucfirst(strtolower($n1));
	$n2 = ucfirst(strtolower($n2));
	$n3 = ucfirst(strtolower($n3));
	//return array($n1,$n2,$n3);
}
function longdate($timestamp)
{
	return date("l F jS Y", $timestamp);
}

function test()
{
	static $count = 1;
	echo "Called: $count time(s). <br />";
	$count++;
}

//========================== Main Program======================================

$nl = "<br />";

$object = new User;

$object->name = "Srinivas"; 
$object->password = "badanekayi"; //note this newly created property
//the above implicitly creates a property and is output below...
//but this is not good practice!!

print_r($object); echo $nl;

//calling a static function below. Note class itself is called!

User::print_name();


$object->name = "Gaja Gamini";
//echo $object->set_user($name);

echo $object->get_user(). $nl;

$object->name = "Rowdy Ranganna";

//echo "This is the return value " . $object->set_user("Rowdy Ranganna").$nl; //changes the name;
//NOTE: Setting the USER via a function DOES NOT WORK!
echo "The user now is changed to: "; echo $object->get_user(). $nl;

$a1 = "WILLIAM"; $a2 = "henry"; $a3 = "gatES";
echo $a1 . " " . $a2 . " " . $a3 . "<br />"; 
fix_names($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3. "<br />";





//testing require statements


//require_once "test.php";
//require_once "toInclude.php";


//note differences of include, include_once, require and require_once
//the best is to use require_once

//testing objects

//$object1 = new User();
//$object1->name = "Srinivas";
//$object2 =  clone $object1; 
//$object2->name = "Deep";
//echo "object 1 name ". $object1->name . $nl;
//echo "Object 2 name ". $object2->name . $nl;





//$temp = "The date is ";
//echo $temp . longdate(time()) . "<br />";

//$x = 0; 
//$y = 0; 
//$px = "<p>X = "; 
//$py = "<p>Y = ";
//$count = 0;
//$number = 1234567890;


//echo strrev("livil is a soap").$nl;
//echo str_repeat("hip ", 2);
//echo strtoupper("hooray!").$nl;
//$lowered = strtolower("aNY # of Letters and Punctuation you WANT");
//echo $lowered.$nl;
//echo ucfirst($lowered).$nl;
//echo $lowered.$nl;
//echo fix_names("srinivas", "aNANTH", "narayan").$nl;

//if (function_exists("array_combine"))
//{
//	echo "array_combine exists! PHP version: "; echo phpversion(); echo $nl;
//}
//else
//{
//	echo "array_combine does not exist <br>"; echo phpversion(); echo $nl;
//}

 
//test();

//echo "This is the short date function result: "; echo sdate(); echo $nl;
//Above line does not work if there is no require_once uncommented

//if (++$x == 1) echo $px.$x ; echo "</p>";
//if ($y-- == 0) echo $py.$y; echo "</p>";

//test ();
//$author = "Alfred E Newman";
//echo <<<_END
//This is a Headline <br/>
//This is the first line. <br/> This is the second.<br/>
//- Written by $author. <br/>
//_END;
//the _End tag must appear at the start of new line and 
//must not have anything else on the line


//while (++$count <= 12) 
//	echo "$count times 12 is ". $count * 12 .$nl;

//test();




 
//echo substr($number, 3, 1) . "<br />"; //automatic change to string...

//test();
//$pi = "3.1415927";
//$radius = 5;
//echo $pi * ($radius * $radius). "<br />";
//echo $author.$pi. $nl; // automatic change to number

//$sd = sdate();
//echo "Unix style date: $sd <br>";
//
//
//echo "<br />";

//$a = 0;
//$b = -3;

/*  //Begin Commented out section

echo "a = $a and b = $b $nl";
if ($a == $b) echo "converted (possibly) and equal".$nl; 
if ($a === $b) echo "not converted, still equal" . $nl; //this is not true, as identity operator (===) prevents conversion.if ($a != $b) echo "1"; if ($a !== $b) echo "2";

if ($a != $b) echo "This is not equal".$nl;
if ($a !== $b) echo "This is truly not equal". $nl; //note identity not equal operator use

echo "and: ".($a AND $b) . "<br />"; 
echo "or:". ($a or $b) . "<br />"; 
echo "xor: ". ($a XOR $b) . "<br />"; 
echo "not a: ".!$a . "<br />";
echo "not b: ".!$b . "<br />";

$j= 10;

while ($j > -10)
{
	$j--;
	if ($j == 0) continue;
	echo "10 / $j = ";
	echo (int)(10 / $j). $nl;
}

*/ //end Commented out section
?>