<?php
global $conn;
require_once "./db.inc";
require_once "./layout.inc";

print_page_header();

$result = $conn->query("SELECT 1+2 as result");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>Result: " . $row["result"] . "</p>";
    }
} else {
    echo "<p>No results found.</p>";
}
?>

<p class="hello">Hello CSS</p>

<?php
print_page_footer();
?>
