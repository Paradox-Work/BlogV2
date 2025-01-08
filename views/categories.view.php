
<link rel='stylesheet' href='style.css'>

<form method='GET' action=''>
<input type='text' name='search_query' value='<?=$_GET["search_query"] ?? "" ?>'/>
<button type='submit'>Search</button>
</form>

<ul>
<?php foreach ($categories as $post) {?>
    <li>  ID: <?= $post['ID'] ?>
          Content: <?= $post['category_name'] ?>
    </li> 
<?php } ?>
</ul>