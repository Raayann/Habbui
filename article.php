<?php
require 'inc/config.php';

/*if (!isset($username)){Redirect("/");}*/

if (isset($_GET['id']) && $_GET['id'] > 0) { // On vérifie qu'il y a une valeur dans le get et si c'est un nombre

    $id = intval($_GET['id']); // On récupère le contenu du get (?id=) la valeur aprés le "="

    $req = $bdd->query('SELECT * FROM cms_news WHERE id = "' . $id . '"'); // On recherche un article dans la base de donnée avec l'id insérer dans le get

    $count = $req->rowCount(); // On compte combien de ligne on a

    if ($count === 1) { // On vérifie si l'article existe
        $article = $req->fetch(); // On récupère les valeurs de la requete
    } else { // Sinon
        Redirect('/index'); // On redirige sur l'index
    }
} else { // Sinon
    Redirect('/index'); // On redirige sur l'index
}

if (!isset($username)) {
    $username = "Invité(e)";
}

$title = ($article['title']);
$page = $title;
$category = "Les nouveautés";
$subcategory = $title;

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui: <?= $title ?></title>
    <style type="text/css">
        .articleslist{white-space: nowrap;overflow: hidden;}
        .articleslistoverflow{word-break: break-all;text-overflow: ellipsis;}
    </style>
    <?php include("inc/_headerprincipal.php"); ?>

    <!--CONTENT HERE -->
    <div class="container">
        <div class="row">
            <div class="col-4 d-none d-sm-block">
                <div class="card card-custom card-stretch">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">
                                Nos articles récents :
                            </h3>
                        </div>
                    </div>
                    <div class="card-body articleslist"><h6>
                        <?php $req2 = $bdd->query('SELECT id,title FROM cms_news ORDER BY id DESC LIMIT 20');
                        while ($res = $req2->fetch()) {
                        ?>
                            • <a class="m-5 articleslistoverflow" href="<?= $lien ?>/news/view/<?= $res['id'] ?>"><?= $res['title'] ?></a></br>
                        <?php } ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-12">
                <div class="card card-custom card-stretch">
                    <div class="card-body">
                        <?php echo html_entity_decode(htmlspecialchars_decode($article['content'])); ?>
                        <div class="separator separator-dashed m-5"></div>
                        <p>Soigneusement rédigé par <?=$article['staff'] ?> le <?=$article['datestr'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END CONTENT HERE -->

    <?php include("inc/_footerprincipal.php"); ?>
    </body>

</html>