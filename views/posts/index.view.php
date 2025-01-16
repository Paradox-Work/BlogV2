<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?>

    <div class="display">
        <div class="display-search">
<form method='GET' action=''>
<input type='text' name='search_query' value='<?=$_GET["search_query"] ?? "" ?>'/>
<button type='submit'>Search</button>
</form>
        </div>
        <div class="display-output">
<?php if (count($comments) == 0){ ?>
<p>Not Found</p>
<?php }; ?>

<ul>
    <?php foreach ($comments as $post) { ?>
        <li><a href="show?ID=<?= $post["ID"] ?>">
            ID: <?= $post['ID']; ?><br>
            Content: <?= htmlspecialchars($post['Content']); ?>
        </a></li>
    <?php } ?>
</ul>
        </div>
    </div>
<?php require "views/components/footer.php"?>
