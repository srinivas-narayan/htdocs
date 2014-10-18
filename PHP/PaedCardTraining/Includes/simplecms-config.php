<?php
    echo "<br/>Inside simplecms-config.php<br/>". __LINE__ ;
    
    define('DB_NAME', 'simplecms');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', '127.0.0.1:8889');

    define('DEFAULT_ADMIN_USERNAME', 'root');
    define('DEFAULT_ADMIN_PASSWORD', 'root');
    
    echo "<br/>Finished simplecms-config.php<br/>" . __LINE__;
?>