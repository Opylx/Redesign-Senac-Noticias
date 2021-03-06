<div id="news-list">
    <?php 
    $dbh = new NewsController();
    $news = $dbh->getAllNews();

    foreach ($news as $value):
        $href = "/src/pages/news.php?id=" . $value['id'];
        $add = strlen($value['shortDescription']) > 100 ?  "..." : "";
    ?>
        <a class='noticia-caixa' href='<?php echo $href; ?>'>
            <div class='main-noticias'>
                <div class='noticias-imagem'>
                    <img class='img-noticia' src='<?php echo getPath($value['mainImage']); ?>'/>
                </div>
                <div class='noticias-cabecalho'>
                    <h2 class='noticia-titulo'><?php echo $value['title']; ?></h2>
                    <p class='noticia-descricao'><?php echo substr($value['shortDescription'], 0, 100) . $add; ?><p>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>