<?php
    $dbPath = __DIR__.'/banco.sqlite';
    $pdo = new PDO("sqlite:$dbPath");
    $videoList = $pdo->query("SELECT * FROm videos;")->fetchAll(\PDO::FETCH_ASSOC);
?>
    <?php require_once('inicio-html.php') ?>
    <ul class="videos__container" alt="videos alura">
        <?php foreach ($videoList as $video) {?>
        <li class="videos__item">
            <iframe width="100%" height="72%" src="<?php echo $video['url']; ?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="descricao-video">
                <img src="./img/logo.png" alt="logo canal alura">
                <h3><?php echo $video['title']; ?></h3>
                <div class="acoes-video">
                    <a href="/editar-video?id=<?php echo $video['id']; ?>">Editar</a>
                    <a href="remover-video?id=<?php echo $video['id']; ?>">Excluir</a>
                </div>
            </div>
        </li>
        <?php } ?>
    </ul>
    <?php require_once('fim-html.php'); ?>
