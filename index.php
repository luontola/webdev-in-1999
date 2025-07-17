<?php
$host = 'db:3306';
$username = 'db';
$password = 'db';
$database = 'db';


$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT 1+2 as result");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Result: " . $row["result"] . "<br>";
    }
} else {
    echo "No results found.";
}

$conn->close();

?>
Done

