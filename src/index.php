<?php
global $mysqli;
include "./db.inc";
include "./layout.inc";

print_page_header();

$result = $mysqli->query("SELECT 1+2 as result");
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
