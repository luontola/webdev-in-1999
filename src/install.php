<?php
global $conn;
require_once "./db.inc";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Install</title>
</head>
<body>

<form method="post" action="/install.php">
    <button type="submit">Install/recreate the database</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn->query("DROP TABLE IF EXISTS messages");
    $conn->query("CREATE TABLE messages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        content TEXT
)");
    $messages = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.",
        "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.",
        "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.",
        "Nisi ut aliquip ex ea commodo consequat.",
        "Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse.",
        "Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.",
        "At vero eos et accusamus et iusto odio dignissimos ducimus.",
        "Et harum quidem rerum facilis est et expedita distinctio.",
        "Nam libero tempore, cum soluta nobis est eligendi optio cumque.",
        "Temporibus autem quibusdam et aut officiis debitis aut rerum.",
        "Itaque earum rerum hic tenetur a sapiente delectus.",
        "Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.",
        "Consectetur, adipisci velit, sed quia non numquam eius modi tempora.",
        "Ut enim ad minima veniam, quis nostrum exercitationem ullam.",
        "Corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.",
        "Quis autem vel eum iure reprehenderit qui in ea voluptate.",
        "Velit esse quam nihil molestiae consequatur.",
        "Fugiat quo voluptas nulla pariatur?",
        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem.",
        "Accusantium doloremque laudantium, totam rem aperiam.",
        "Eaque ipsa quae ab illo inventore veritatis et quasi architecto.",
        "Beatae vitae dicta sunt explicabo.",
        "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.",
        "Aut fugit, sed quia consequuntur magni dolores eos.",
        "Qui ratione voluptatem sequi nesciunt.",
        "Neque porro quisquam est, qui dolorem ipsum quia dolor.",
        "Sit amet, consectetur, adipisci velit.",
        "Sed quia non numquam eius modi tempora incidunt ut labore."
    ];
    $stmt = $conn->prepare("INSERT INTO messages (content) VALUES (?)");
    foreach ($messages as $msg) {
        $stmt->bind_param("s", $msg);
        $stmt->execute();
    }
    echo "<p>Database initialized.</p>";
}
?>

</body>
</html>
