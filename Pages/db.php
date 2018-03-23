
<?php
define('DB_SERVER', '141.219.194.34');
define('DB_USERNAME', 'tspSpring2018');
define('DB_PASSWORD', 'TeamSoftwareProject');
define('DB_NAME', 'TeamSoftwareProject');
//define('DB_PORT', '3306');

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

?>
