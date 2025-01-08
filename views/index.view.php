<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<link rel='stylesheet' href='style.css'>
woaw<br>

<form method='GET' action=''>
<input type='text' name='search_query' value='<?=$_GET["search_query"] ?? "" ?>'/>
<button type='submit'>Search</button>
</form>



<ul>
    <?php foreach ($comments as $post) { ?>
        <li>
            ID: <?= $post['ID']; ?><br>
            Content: <?= $post['Content']; ?>
        </li>
    <?php } ?>
</ul>


</body>
</html>