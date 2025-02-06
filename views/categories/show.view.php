<?php 
    require "views/components/categories/navbar.php";
    require "views/components/header.php";     ?>

<h1><?= htmlspecialchars($comment["Content"])?></h1>
<?php $post = $_GET['ID'];?>
<p><a href="/edit?ID=<?= $comment["ID"] ?>">Edit this post</a></p> <!-- Link to edit page-->
<form action="/delete" method="POST">
<input type="hidden" name="ID" value="<?= $comment["ID"] ?>">
<button>Ahhh</button>
</form>
<?php require "views/components/footer.php"; ?>

