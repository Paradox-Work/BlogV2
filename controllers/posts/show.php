<?php 


    if(!isset($_GET["ID"]) || $_GET["ID"] == "") {
    redirectIfNotFound();
    }
        $sql = "SELECT * FROM comments WHERE ID = :ID";
        $params = ["ID" => $_GET["ID"]];
        $comments= $db->query($sql, $params)->fetch();
        if (!$comments) {
            redirectIfNotFound();
        }
    require "views/posts/show.view.php";
?>