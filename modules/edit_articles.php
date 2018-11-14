<?php

if(isset($_POST['title'])) {
	$result = $pdo->prepare('UPDATE articles SET title = :title, content = :content WHERE id = :id');
    $result->bindParam(':title', $_POST['title']);
    $result->bindParam(':content', $_POST['content']);
	$result->bindParam(':id', $_GET['id']);
	$result->execute();

	header('location: index.php?v=articles');
}

if(!isset($_GET['id'])) {
	header('location: index.php?v=articles');
}

$result = $pdo->prepare('SELECT * FROM articles WHERE id = :id');
$result->bindParam(':id', $_GET['id']);
$result->execute();
$articles = $result->fetch();

?>


<h1>Edytowanie artykułu</h1>
<form method="post">
	<div class="form-group">
		<label>Tytuł</label>
		<input type="text" name="title" value="<?php echo $articles['title']; ?>" class="form-control">
	</div>

    <div class="form-group">
        <label>Treść artykułu</label>
        <textarea name="content" class="form-control" id="exampleTextarea"  rows="3" ><?php echo $articles['content']; ?></textarea>
    </div>

	<div class="form-group">
		<button class="btn btn-primary">Zapisz</button>
	</div>
</form>