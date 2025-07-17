<?php
global $mysqli;
include "./db.inc"
?>
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

<header>
    <nav>
        <a href="/">Home</a>
    </nav>
    <h1>LAMP Stack</h1>
    <p>Web development like it is 1999</p>
</header>

<main>

    <?php
    $result = $mysqli->query("SELECT 1+2 as result");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>Result: " . $row["result"] . "</p>";
        }
    } else {
        echo "<p>No results found.</p>";
    }
    ?>

    <p class="hello">Done</p>

</main>

</body>
</html>
