<?php
if(!isset($_GET['id'])) {
	header('location: index.php?v=articles');
}

$result = $pdo->prepare('DELETE FROM articles WHERE id = :id');
$result->bindParam(':id', $_GET['id']);
$result->execute();
header('location: index.php?v=articles');