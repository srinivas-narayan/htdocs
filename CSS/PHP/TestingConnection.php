<?php 
require_once 'login.php';
$db_server = mysql_connect ($db_hostname, $db_username, $db_password);
if (!$db_server) 
	die ("Fatal error: Unable to connect to database: " . mysql_error());
else 
	echo "This works!! Database connected..." . "<br />";

mysql_select_db($db_database) or die ("Unable to select database :" . mysql_error());

$query = "SELECT * FROM CLASSICS";
$result = mysql_query($query);

if (!$result) die ("Database access failed :" . mysql_error());

$rows = mysql_num_rows($result);

for ($i=0; $i < $rows; ++$i)
{
	echo "+++++ Record Number: " . $i . "<br />";
	echo "__________________________________________________" . "<br />";
	echo "Author   : " . mysql_result($result, $i, 'author') . "<br .>";
	echo "Title    : " . mysql_result($result, $i, 'title') . "<br .>";
	echo "Category : " . mysql_result($result, $i, 'category') . "<br .>";
	echo "Year     : " . mysql_result($result, $i, 'year') . "<br .>";
	echo "ISBN     : " . mysql_result($result, $i, 'isbn') . "<br .>";
	echo "__________________________________________________" . "<br />";
}



mysql_close($db_server);

?>