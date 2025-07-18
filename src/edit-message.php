<?php
global $conn;
require_once "./db.inc";
require_once "./layout.inc";

$message_id = isset($_REQUEST['id']) ? (int)$_REQUEST['id'] : 1;

$saved = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $saved = true;
    $new_content = $_POST['content'];
    $stmt = $conn->prepare("UPDATE messages SET content = ? WHERE id = ?");
    $stmt->bind_param("si", $new_content, $message_id);
    $stmt->execute();
    // the post-and-redirect pattern
    //header("Location: /edit-message.php?id=$message_id");
    //die();
}

$stmt = $conn->prepare("SELECT id, content FROM messages WHERE id = ?");
$stmt->bind_param("i", $message_id);
$stmt->execute();
$message = $stmt->get_result()->fetch_assoc() or die("Message not found");
$content = htmlspecialchars($message['content']);

print_page_header();
?>

<h2>Edit message</h2>

<form method="post" action="/edit-message.php">
    <input type="hidden" name="id" value="<?php echo $message_id; ?>">
    <textarea name="content"><?php echo $content; ?></textarea>
    <button type="submit">Save</button>
    <a href="/guestbook.php">Go back</a>
</form>

<?php
if ($saved) {
    echo "<p class=\"notice\">Message saved.</p>\n";
}

print_page_footer();
?>
