<?php //system calls
$cmd = "date"; //Unix
//$cmd = "dir"; //dos and windows

exec(escapeshellcmd($cmd), $output, $status);

if ($status) echo "Command Failed <br>";
else
{
	echo "<pre>";
	foreach ($output as $line) echo "$line\n";
	echo "</pre>";
}
?>
