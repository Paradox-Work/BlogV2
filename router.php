<?php
// Determine the route
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$routes = require("routes.php");
// Map routes to controllers and views
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    // 404 Not Found
    require "controllers/404.php";
    http_response_code(404);
    echo "<p>Sorry, the page was not found!</p>";
    die();
}
