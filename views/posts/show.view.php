<?php 
    require "views/components/navbar.php";
    require "views/components/header.php";     ?>
<h1><?= htmlspecialchars($comments["Content"])?></h1>
<?php $post = $_GET['ID'];?>
<p><a href="/edit?ID=<?= $comments["ID"] ?>">Edit this post</a></p> <!-- Link to edit page
<?php require "views/components/footer.php"; ?>

