<?php
// https://www.php.net/manual/en/mysqli.construct.php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli('db:3306', 'db', 'db', 'db');
$conn->set_charset('utf8mb4');
