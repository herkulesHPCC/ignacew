<?php
 $result = $pdo->query('SELECT * FROM `categories` group by kolej asc');
 $categories = $result->fetchAll();
?>


            <ul class="blocklist">
            <?php foreach($categories as $category) {
                echo '<li>
                    <a href="index.php?v=posts&id_categories='.$category['id'].'&name='.$category['name'].'">'.$category['name'].'</a></li>'; } ?>
            </ul>
