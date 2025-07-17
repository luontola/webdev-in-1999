<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAMP - Hello world</title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
    <link rel="stylesheet" href="/style.css">
    <script src="https://cdn.jsdelivr.net/npm/htmx.org@2.0.6/dist/htmx.js"></script>
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

<p class="hello">Done</p>

</body>
</html>
