<?php
    echo "<br/>Inside connectDB.php&nbsp". __LINE__;
   
    require_once ("/Includes/simplecms-config.php");
    echo "<br/>Inside connectDB.php&nbsp". __LINE__;
    require_once ("/Functions/database.php");
    echo "<br/>Inside connectDB.php&nbsp". __LINE__;
	
    // Create database connection
    $databaseConnection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($databaseConnection->connect_error)
    {
        die("Database selection failed: " . $databaseConnection->connect_error);
    }

    // Create tables if needed.
    prep_DB_content();
?>