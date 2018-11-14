<?php

$result = $pdo->prepare('SELECT * FROM `articles` WHERE id_categories = :id_categories');
$result->bindParam(':id_categories', $_GET['id_categories']);
$result->execute();
$articles = $result->fetchAll();

?>

<h1><?php echo $_GET['name']; ?> </h1>
<!-- blog start -->
<?php foreach($articles as $artykul) {
echo '
<hr><div class="blog-post">
            <h2 class="blog-post-title">'.$artykul['title'].' </h2>
            <p class="blog-post-meta">'.$artykul['date_add'].'</p>
            <p>'.$artykul['content'].'</p>
</div>';
}
?>
