<?php
require "functions.php";
require "Database.php";

// Load configuration and initialize database
$config = require "config.php";
$db = new Database($config["database"]);

// Determine the route
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$routes = require("routes.php");
// Map routes to controllers and views
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    // 404 Not Found
    http_response_code(404);
    echo "<p>Sorry, the page was not found!</p>";
    require "controllers/404.php";
    die();
}
