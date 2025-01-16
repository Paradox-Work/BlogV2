<?php 
    require "views/components/navbar.php";
    require "views/components/header.php";     ?>
<h1>Luck</h1>
<form method="POST">
    <label>Content:</label>
    <input name="content" type="text" />
    <button type="submit">Submit</button>
</form>
<?php require "views/components/footer.php"; ?>

