<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAMP - Hello world</title>
</head>
<body>

<?php
$host = 'db:3306';
$username = 'db';
$password = 'db';
$database = 'db';

// https://www.php.net/manual/en/mysqli.construct.php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($host, $username, $password, $database);
$mysqli->set_charset('utf8mb4');

$result = $mysqli->query("SELECT 1+2 as result");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>Result: " . $row["result"] . "</p>";
    }
} else {
    echo "<p>No results found.</p>";
}

$mysqli->close();

?>

<p>Done</p>

</body>
</html>
