<h1>Artykuły</h1>

<?php
    $result = $pdo->query('SELECT * FROM `articles`');
    $articles = $result->fetchAll();
?>

<a href="index.php?v=add_post" class="btn btn-primary">Dodaj artykuł</a>

<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Tytuł artykułu</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    foreach($articles as $artykuly) {
    ?>

        <tr>
            <td><?php echo $artykuly['id'];?></td>
            <td><?php echo $artykuly['title'];?></td>
            <td>
                <a href="index.php?v=edit_articles&id=<?php echo $artykuly['id'] ?>" class="btn btn-success">Edit</a>
            </td>
            <td>
                <a href="index.php?v=delete_articles&id=<?php echo $artykuly['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>

    <?php } ?>
</table>