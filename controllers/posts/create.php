<?php
require "views/posts/create.view.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "INSERT INTO comments (Content) VALUES (:content)";
    $params = ["content" => $_POST["content"]];
    $db->query($sql, $params);
    returnHome();
}


?>