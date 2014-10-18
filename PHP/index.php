<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >
<html xmlns="http://www.w3.org/1999/xhmtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Project to Learn PHP</title>
    </head>
    <body>
        <p>This is an example XHTML document</p>
        <h1>This is heading 1 style</h1>
        <p>This is some ordinary text</p>
        <?php
            //testing if this works!
            echo "The current date and time are : ";
            date_default_timezone_set('Europe/London');
            echo date("d M Y H:m:s", time()); echo "<br />";
        ?>
        <p><a href=".\PaedCardTraining\index.php">PaedCardTraining Website</a></p>
    </body>
</html>
