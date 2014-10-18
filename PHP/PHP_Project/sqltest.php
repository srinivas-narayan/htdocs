<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testing MySQL Connection</title>
    </head>
    <body>
<?php

      
//get login parameters        
require_once 'login.php';

//main program starts below

$db_server = mysql_connect($db_hostname, $db_username, $db_password); //connect

if (!$db_server) // if failed to connect!
{
            die("Failed to connect!");
}


mysql_select_db($db_database, $db_server) or die ("Failed to open database");

//is this a re-post? check all variables a set - if yes then repost, else not!
if (isset($_POST['author']) && 
 	isset($_POST['title']) && 
 	isset($_POST['category']) && 
 	isset($_POST['year']) && 
 	isset($_POST['pages']) &&
 	isset($_POST['isbn']))
{
	//re-post, hence get all data into variables.
	$author	= 	get_post('author'); 
	$title	= 	get_post('title'); 
	$category	=	get_post('category'); 
	$year	=	get_post('year');
	$pages 	=	get_post ('pages'); 
	$isbn 	=	get_post('isbn');
	
echo "This is line after assigning variables from repost:  " . __LINE__ . " of file " . __FILE__ . "<br />";
$del = get_post('delete'); echo "Deleting record number = $del <br />";
	if ( $del=="yes" && $isbn != "")
	{
		$query = "DELETE FROM classics WHERE isbn='$isbn';";
		echo "This is line while deleting a record " . __LINE__ . " of file " . __FILE__ . "<br />";
		if (!mysql_query($query, $db_server)) 
		{
			echo "DELETE failed: $query<br />" . mysql_error() . "<br /><br />";
			echo "This is line deleting failed " . __LINE__ . " of file " . __FILE__ . "<br />";
		}
	} 
	else 
	{
		$query = "INSERT INTO classics VALUES" .
		"('$author', '$title', '$category', '$year', '$pages','$isbn')";
		
		if (!mysql_query($query, $db_server)) 
			echo "INSERT failed: $query<br />" . mysql_error() . "<br /><br />";
	} 
}
//display all records, every time the page is displayed!!
echo <<<_END
<form action="sqltest.php" method="post">
<pre>
Author	<input type="text" name="author" /> 
Title <input type="text" name="title" /> 
Category <input type="text" name="category" /> 
Year <input type="text" name="year" />
Pages <input type="text" name="pages" /> 
ISBN <input type="text" name="isbn" />
<input type="submit" value="ADD RECORD" /> 
</pre>
</form>
_END;

$query = "SELECT * FROM classics"; $result = mysql_query($query);
 if (!$result) {
    die("Database access failed: " . mysql_error());
}
$rows = mysql_num_rows($result);
$del = get_post('delete');
$isbn = get_post ('isbn'); 
echo "This is line after getting value of delete= $del, isbn = $isbn & line = " . __LINE__ . " of file " . __FILE__ . "<br />";
for ($j = 0 ; $j < $rows ; ++$j)
{
	$row = mysql_fetch_row($result); 
	echo <<<_END
	<pre>
	Author		: $row[0]
	Title		: $row[1] 
	Category	: $row[2] 
	Year		: $row[3]
	Pages		: $row[4]
	ISBN		: $row[5]
	</pre>
	<form action="sqltest.php" method="post">
	<input type="hidden" name="delete" value="yes" /> 
	<input type="hidden" name="isbn" value="$row[5]" /> 
	<input type="submit" value="DELETE RECORD" />
	</form> 
_END;

} //end 'for' loop

mysql_close($db_server); //close server at end
//function to get re-posted variables...
function get_post($var)
{
	return mysql_real_escape_string($_POST[$var]);
}

//error function

function mysql_fatal_error($msg)
{
	$msg2 = mysql_error();  //store the message
	echo <<< _END
		We are sorry, but it was not possible to complete the requested task. 
		The error message we got was:
		
		<p>$msg: $msg2</p>

		Please click the back button on your browser
		and try again. If you are still having problems,
		please <a href="mailto:admin@server.com">email our administrator</a>. 
		Thank you.
_END;

}
        
?>
</body>
</html>
