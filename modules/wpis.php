<?php
$result = $pdo->prepare('SELECT * FROM `articles` WHERE id = :id ');
$result->bindParam(':id', $_GET['tag']);
$result->execute();
$wpis = $result->fetchAll();

foreach($wpis as $artykul) {
echo '</br><hr><div class="blog-post" >
            <h2 class="blog-post-title">'.$artykul['title'].' </h2>
            <p class="blog-post-meta">'.$artykul['date_add'].'</p>
            <p>'.$artykul['content'].'</p>
            
</div><a href="index.php" class="button">Powrót</a>';
}
?>