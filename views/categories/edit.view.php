<?php 
    require "views/components/navbar.php";
    require "views/components/header.php"; 
?>

<h1>Edit Blog Post</h1>

<form method="POST" action="">
    <!-- Hidden ID field -->
    <input name="ID" type="hidden" value="<?= $comments["ID"] ?? '' ?>"/>

    <!-- Content input field with default content value -->
    <?php if(isset($errors["content"])): ?>
       <p><?= $errors["content"] ?></p>
    <?php endif; ?>
    
    <input type="text" name="content" value="<?= $comments["Content"] ?? '' ?>"/>

    <button type="submit">Submit</button>
</form>

<?php require "views/components/footer.php"; ?>