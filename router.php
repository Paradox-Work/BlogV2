<?php
require "functions.php";
require "Database.php";

// Load configuration and initialize database
$config = require "config.php";
$db = new Database($config["database"]);

// Determine the route
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

// Map routes to controllers and views
if ($uri == '/') {
    require 'controllers/index.php'; // Load homepage logic
    require 'views/index.view.php';  // Load homepage view
} elseif ($uri == '/about') {
    require 'controllers/story.php'; // Load "about" page logic
    require 'views/story.view.php';  // Load "about" page view
} elseif ($uri == '/categories') {
    require 'controllers/categories.php'; // Load categories logic
    require 'views/categories.view.php';  // Load categories view
} else {
    // 404 Not Found
    http_response_code(404);
    echo "<p>Sorry, the page was not found!</p>";
    die();
}
