<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
echo "Requested URI: " . $uri; // Debugging output
if ($uri === '/') {
    require 'controllers/index.php';
} elseif ($uri === '/About') {
    require 'controllers/story.php';
} elseif ($uri === '/Categories') {
    require 'controllers/categories.php';
} else {
    // If route doesn't exist, show 404 page
    http_response_code(404);
    echo "<p>Sorry, the page was not found!</p>";
    die(); // Stop the further script execution
}

?>