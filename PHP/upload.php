<?php //upload.php
echo <<<_END
<html>
<head>
	<title>PHP form upload</title>
</head>
<body>
<form method='post' action='upload.php' enctype='multipart/form-data'>
Select a JPG, GIF, PNG or TIF file: <input type='file' name='filename' size='50'/>
<input type='submit' value='Upload' />
</form>
_END;
if ($_FILES)
{
	$name = $_FILES['filename']['name'];
	//now strip all extraneous characters other than alphanumeric and period
	//also convert to lower case to preserver OS compatibility
	$name = strtolower(ereg_replace("[^A-Za-z0-9.]", "", $name));
	echo "The file name is: '$name' <br>";
	
	switch ($_FILES['filename']['type'])
	{
		case 'image/pjpeg'	:	//progressive jpeg, same as jpeg
		case 'image/jpeg'	:	$ext = 'jpg' ; break;
		case 'image/gif'	: 	$ext = 'gif'; break;
		case 'image/png'	: 	$ext = 'png'; break;
		case 'image/tiff'	:	$ext = 'tif'; break;
		default				:	$ext = ''; break;
	}
	if ($ext)
	{
		
		$n = "image.$ext"; //change name of file to image.ext
		move_uploaded_file($_FILES['filename']['tmp_name'], $n);
		echo "Uploaded image '$name'  as '$n' :<br /> <img src='$n' />";
	}
	else echo "No image has been uploaded! <br>";
}
echo "</body> </html>";
?>