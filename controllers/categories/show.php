<?php 


    if(!isset($_GET["ID"]) || $_GET["ID"] == "") {
    redirectIfNotFound2();
    }
        $sql = "SELECT * FROM comments WHERE ID = :ID";
        $params = ["ID" => $_GET["ID"]];
        $comment= $db->query($sql, $params)->fetch();
        if (!$comment) {
            redirectIfNotFound2();
        }
    require "views/categories/show.view.php";
?>