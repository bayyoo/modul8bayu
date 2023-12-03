<?php
// config.php
$dbhost = 'localhost';
$dbuser = 'id21443593_dane';
$dbpass = 'Zidaneotwitkonsultan1!';
$dbname = 'id21443593_bukutamu';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die('Error connecting to mysql');
mysqli_select_db($conn, $dbname);
?>