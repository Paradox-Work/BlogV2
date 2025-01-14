<?php
// Ensure this file only deals with the logic for the homepage
$sql = "SELECT * FROM comments";
$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    $search_query = "%" . $_GET["search_query"] . "%";
    $sql .= " WHERE content LIKE :search_query;";
    $params = ["search_query" => $search_query];
}

$comments = $db->query($sql, $params)->fetchAll(); // Fetch all the comments matching the query
$pageTitle = "Daily Bugle"; // Set the title for the homepage
require "views/posts/index.view.php";