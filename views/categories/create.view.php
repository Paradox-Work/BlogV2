<?php 
    require "views/components/categories/navbar.php";
    require "views/components/header.php";     
?>

<h1>Luck</h1>

<form method="POST">
    <label>Content:</label>
    <input name="content" type="text" value="<?= $_POST['content'] ?? "" ?>"/>

    <!-- Dropdown input -->
    <label>Category:</label>
   <select name="category">
    <option value="" <?= empty($_POST['category']) ? 'selected' : '' ?>>Select a category</option>
    <option value="1" <?= ($_POST['category'] ?? '') == "1" ? 'selected' : '' ?>>Events</option>
    <option value="2" <?= ($_POST['category'] ?? '') == "2" ? 'selected' : '' ?>>Music</option>
    <option value="3" <?= ($_POST['category'] ?? '') == "3" ? 'selected' : '' ?>>Sports</option>
</select>


    <button type="submit">Submit</button>
</form>
<?php if(isset($errors["content"])): ?>
       <p><?= $errors["content"] ?></p>
    <?php endif; ?>
    <?php if (isset($errors["category"])): ?>
    <p><?= $errors["category"] ?></p>
<?php endif; ?>
<?php require "views/components/footer.php"; ?>
