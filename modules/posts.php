<?php




//paginator start
 function t1($val, $min, $max) {
	return ($val >= $min && $val <= $max);
}
$count = $pdo->query( 'SELECT COUNT( content ) as cnt FROM articles' )->fetch()['cnt'];
$page = isSet( $_GET['page'] ) ? intval( $_GET['page'] - 1 ) : 0;
$limit = 3;
$from = $page * $limit;
$allPage = ceil( $count / $limit ); 
//paginator stop


$result = $pdo->prepare('SELECT * FROM `articles` WHERE id_categories = :id_categories LIMIT '.$from.', '.$limit.' ');
$result->bindParam(':id_categories', $_GET['id_categories']);

$result->execute();
$articles = $result->fetchAll();

?>

<h1><?php echo $_GET['name']; ?> </h1>
<!-- blog start -->
<?php foreach($articles as $artykul) {
echo '
</br><hr><div class="blog-post" style="overflow: hidden; height:200px;">
            <h2 class="blog-post-title">'.$artykul['title'].' </h2>
            <p class="blog-post-meta">'.$artykul['date_add'].'</p>
            <p>'.$artykul['content'].'</p>
            
</div><a href="index.php?v=wpis&tag='.$artykul['id'].'" class="button">Czytaj więcej</a>';
}
if( $page > 4 ) {
    echo '<a href="index.php?v=posts&id_categories=23&name=Zamówienia%20publiczne&page=1"> < Najnowsze wpisy </a> | ';
}
for( $i = 1; $i <= $allPage; $i++ ) {
    $bold = ( $i == ( $page + 1 ) ) ? 'style="font-size: 24px;"' : '';
    if( t1( $i, ( $page -3 ), ( $page + 3 ) ) ) {
        echo '<a ' . $bold . ' href="index.php?v=posts&id_categories=23&name=Zamówienia%20publiczne&page=' . $i . '">' . $i . '</a> | ';
    }
}
 if( $page < ( $allPage - 1 ) ) {
     echo '<a href="index.php?v=posts&id_categories=23&name=Zamówienia%20publiczne&page=' . $allPage . '">Najstarsze wpisy > </a> | ';
 }
?>
