<?php 
    require "views/components/navbar.php";
    require "views/components/header.php";     ?>
<h1>Luck</h1>
<form method="POST">
    <label>Content:</label>

    <?php if(isset($errors["content"])): ?>
       <p><?= $errors["content"] ?></p>
    <?php endif; ?>

    <input name="content" type="text"  value="<?= $_POST['content'] ?? ""?>"/>
    <button type="submit">Submit</button>
</form>
<?php require "views/components/footer.php"; ?>

