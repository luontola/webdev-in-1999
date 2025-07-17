<?php

function print_page_header()
{
    $current = $_SERVER['SCRIPT_NAME'];
    $on_home = $current == "/index.php" ? ' class="current"' : "";
    $on_other_page = $current == "/other-page.php" ? ' class="current"' : "";
    $on_guestbook = $current == "/guestbook.php" ? ' class="current"' : "";
    echo <<<END
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
        <a href="/"{$on_home}>Home</a>
        <a href="/other-page.php"{$on_other_page}>Other page</a>
        <a href="/guestbook.php"{$on_guestbook}>Guestbook</a>
    </nav>
    <h1>LAMP Stack</h1>
    <p>Web development like it is 1999</p>
</header>

<main>

END;
}

function print_page_footer()
{
    echo <<<END
</main>

</body>
</html>
END;
}
