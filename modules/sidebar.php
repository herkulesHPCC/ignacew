<?php
 $result = $pdo->query('SELECT * FROM `categories`');
 $categories = $result->fetchAll();
?>

<div id="sidebar" style="float: left;">
            <ul class="sidebar-nav">
            <?php foreach($categories as $category) {
                echo '<li>
                    <a href="index.php?v=posts&id_categories='.$category['id'].'&name='.$category['name'].'">'.$category['name'].'</a></li>'; } ?>
            </ul>
</div>