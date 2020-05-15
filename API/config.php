<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'math_fun');

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'math');
define('DB_PASSWORD', 'Megalink87!');
define('DB_NAME', 'math');

// define('DB_SERVER', 'sql109.epizy.com');
// define('DB_USERNAME', 'epiz_25247373');
// define('DB_PASSWORD', 'o6PntlydnCdLVG0');
// define('DB_NAME', 'epiz_25247373_math4fun');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>