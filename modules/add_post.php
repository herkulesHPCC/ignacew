<?php

if(isset($_POST['title'])) {
    $result = $pdo->prepare('INSERT INTO articles (title, content, id_categories, date_add) VALUES (:title, :content, :id_categories, :date_add)');
    $result->bindParam(':title', $_POST['title']);
    $result->bindParam(':content', $_POST['content']);
    $result->bindParam(':id_categories', $_POST['id_categories']);
    $result->bindParam(':date_add', $_POST['date_add']);
    $result->execute();

    header('location: index.php?v=categories');
}

$result = $pdo->query('SELECT * FROM `categories`');
$categories = $result->fetchAll();
$data = date("Y-m-d H:i:s");

?>

<h1>Dodawanie artykułu</h1>
<form method="post">
    <div class="form-group">
        <label>Tytuł artykułu</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label>Treść artykułu</label>
        <textarea name="content" class="form-control" id="summernote" rows="3" ></textarea>
    
    </div>
    <div class="form-group">
        <label>Wybierz kategorie</label>
        <select name="id_categories">
        <?php foreach($categories as $category) { 
        echo '<option value="'.$category['id'].'">'.$category['name'].'</option>'; } ?>
        </select>
        <?php echo '<input type="hidden" name="date_add" class="form-control" value="'.$data.'">'; ?>
    <div class="form-group">
        <label>Załącz plik jeśli konieczny</label>
        <input id="input-b1" name="input-b1" type="file" class="file" data-browse-on-zone-click="true">
    </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Zapisz</button>
    </div>
</form>