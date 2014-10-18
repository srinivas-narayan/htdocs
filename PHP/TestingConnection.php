<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th,td {
    padding: 15px;
    text-align: center;
}
.aleft {
    text-align: left;
}
</style>
<?php 
require_once 'login.php';
$db_server = mysql_connect ($db_hostname, $db_username, $db_password);
if (!$db_server) 
	die ("Fatal error: Unable to connect to database: " . mysql_error());
else 
	echo "This works!! Database connected..." . "<br />";

mysql_select_db($db_database) or die ("Unable to select database :" . mysql_error());

$query = "SELECT * FROM departments ORDER BY dept_no";
$result = mysql_query($query);

if (!$result) die ("Database access failed :" . mysql_error());

$rows = mysql_num_rows($result);

//generate table header 
echo "<table border='1'> <tr>";
        echo "<th>Record Number: </th>";
	echo "<th>Department Number</th>";
	echo "<th>Department Name </th></tr>";
//now the data
for ($i=0; $i < $rows; ++$i)
{
    echo "<tr><td>$i</td><td>". mysql_result($result, $i, 'dept_no') . "</td><td class='aleft' >". mysql_result($result, $i, 'dept_name'). "</td></tr>"; 
}
//end table
echo "</table>";


mysql_close($db_server);

?>