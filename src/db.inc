<?php
// https://www.php.net/manual/en/mysqli.construct.php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('db:3306', 'db', 'db', 'db');
$mysqli->set_charset('utf8mb4');
