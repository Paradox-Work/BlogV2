<?php 
require "functions.php";
require "Database.php";
$config = require ("config.php");

$db= new Database($config["database"]);

$sql="SELECT * FROM comments";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
     //TODO 
     $search_query = "%" . $_GET["search_query"] . "%";
      $sql .= " WHERE content LIKE :search_query;";
     $params = ["search_query" => $search_query];
    }
     $comments = $db->query($sql, $params)->fetchAll();

require "views/index.view.php";
