<?php require "components/header.php"?>
<?php require "components/navbar.php"?>
woaw<br>

<form method='GET' action=''>
<input type='text' name='search_query' value='<?=$_GET["search_query"] ?? "" ?>'/>
<button type='submit'>Search</button>
</form>


<?php if (count($comments) == 0){ ?>
<p>Not Found</p>
<?php }; ?>


<ul>
    <?php foreach ($comments as $post) { ?>
        <li>
            ID: <?= $post['ID']; ?><br>
            Content: <?= $post['Content']; ?>
        </li>
    <?php } ?>
</ul>

<?php require "components/footer.php"?>
