<?php
global $conn;
require_once "./db.inc";
require_once "./layout.inc";

print_page_header();

$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$result = $conn->query("SELECT COUNT(*) AS total FROM messages");
$row = $result->fetch_assoc();
$total_messages = $row['total'];
$total_pages = ceil($total_messages / $limit);

function print_pagination_links()
{
    global $page, $total_pages;
    echo "<div>";
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $page) {
            echo "<strong>$i</strong> ";
        } else {
            echo "<a href='?page=$i#messages'>$i</a> ";
        }
    }
    echo "</div>";
}

?>

<h2>Guestbook</h2>

<div id="messages">
    <?php
    $stmt = $conn->prepare("SELECT id, content FROM messages ORDER BY id LIMIT ? OFFSET ?");
    $stmt->bind_param("ii", $limit, $offset);
    $stmt->execute();
    $result = $stmt->get_result();

    print_pagination_links();
    while ($message = $result->fetch_assoc()) {
        $id = htmlspecialchars($message['id']);
        $content = htmlspecialchars($message['content']);
        echo <<<EOF
<p>Message {$id}:
<br>{$content}
<br><a href="/edit-message.php?id={$id}">Edit</a></p>

EOF;
    }
    print_pagination_links()
    ?>
</div>

<?php
print_page_footer();
?>
