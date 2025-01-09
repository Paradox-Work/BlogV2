<?php 


$sql="SELECT * FROM comments";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != ""){
     //TODO 
     $search_query = "%" . $_GET["search_query"] . "%";
      $sql .= " WHERE content LIKE :search_query;";
     $params = ["search_query" => $search_query];
    }
     $comments = $db->query($sql, $params)->fetchAll();
$pageTitle = "Daily Bugle";
require "views/index.view.php";
