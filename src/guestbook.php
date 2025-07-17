<?php
global $conn;
require_once "./db.inc";
require_once "./layout.inc";

print_page_header();
?>

<h2>Guestbook</h2>

<?php
$result = $conn->query("SELECT id, content FROM messages ORDER BY id");
while ($message = $result->fetch_assoc()) {
    echo "<p>Message " . htmlspecialchars($message['id']) . ": " . htmlspecialchars($message["content"]) . "</p>\n";
}

print_page_footer();
?>
