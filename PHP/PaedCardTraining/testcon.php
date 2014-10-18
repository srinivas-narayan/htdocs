<?php 
echo __LINE__. " - line number <br /> ";
//connect via socket

$link = new mysqli("localhost:8889", "root", "root", "publications");
echo $link->client_info . "<br />";
//$link = mysqli_connect(
// ':/Applications/MAMP/tmp/mysql/mysql.sock',
//  'root',
//  'root'
// );
if ($link->connect_error) {
  die ("Failed to connect to MySQL: " . $link->connect_error);
}
echo 'Connected successfully';
//mysql_close($link);

?>