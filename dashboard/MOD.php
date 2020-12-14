<?php require '../inc/config.php';

if (!isset($_SESSION['name'])){
	Redirect("/");
	exit();
}?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui | Dashboard</title>
    <?php include('inc/_header.php') ?>

    <!--CONTENT HERE -->
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    HABBUI
                    <small>Modération</small>
                </h3>
            </div>
        </div>
        <div class="card-body">
            <h2><strong>Règlement&nbsp;Général&nbsp;:</strong></h2>
            <p><strong>Chaque membre de l&rsquo;équipe s&rsquo;engage &agrave; respecter le règlement
                    applicable &agrave; chacun, sous peine de sanctions allant de l&rsquo;avertissement &agrave;
                    l&rsquo;exclusion définitive de l&rsquo;équipe. Toutes les semaines un bilan vous sera
                    transmis. Si ce bilan vient &agrave; fuiter une exclusion définitive vous sera
                    imposé.</strong></p>
            <p>&nbsp;</p>
            <h2><strong>Le règlement&nbsp;:</strong></h2>
            <p>Les modérateurs se doivent de rester neutre, de protéger et d'assurer la
                sécurité des joueurs face aux insultes, débordement.</p>
            <p>La compréhension est primordiale au sein du p&ocirc;le modération afin de pouvoir s'occuper
                des problèmes d'autrui et de les gérer.</p>
            <p>Le comportement du modérateur doit &ecirc;tre irréprochable, il se doit de garder son
                sang-froid en toutes situations peu importe les personnes que cela implique.</p>
            <p>&nbsp;</p>
            <h2><strong>Informations :&nbsp;</strong></h2>
            <ol>
                <li>Homophobie, racisme, etc.. : La prolifération de haine envers des communautés est
                    totalement interdite au sein du rétro et du discord. Ces discriminations sont punies par la
                    loi alors je compte sur vous pour faire régner la tranquillité de tous les joueurs.
                </li>
                <li>Les problèmes entre deux personnes que ce soit entre des joueurs ou entre des staffs doivent
                    &ecirc;tre régler en privé, ceci ne concerne pas les autres joueurs qui eux n'ont rien
                    demandé.</li>
                <li>La divulgation de votre vie privée, de vos réseaux est interdite, ce monde est virtuel
                    alors votre vie privée n'a rien &agrave; faire sur le serveur d'Habbui. Si vous voulez
                    commencer des relations amicales ou amoureuses ce sera en privé.</li>
                <li>Pour venir sur les relations, les relations mineur/majeur sont aussi interdites entre des
                    modérateurs et des joueurs pour simple question de professionnalisme. M&ecirc;me si ceci peut
                    &ecirc;tre contraignant si vous &ecirc;tes amoureux, pour la justice c'est autrement. Et un
                    modérateur se doit d'&ecirc;tre parfaitement clean vu qu'il reflète Habbui.</li>
                <li>En tant que modérateur, il se peut que vos amis/connaissances fasse aussi des b&ecirc;tises,
                    c'est pourquoi vous devez rester neutre. Une erreur est une erreur.</li>
                <li>L&rsquo;écriture est primordiale dans le p&ocirc;le modération et dans
                    l&rsquo;équipe en elle-m&ecirc;me mais les discriminations vis-&agrave;-vis de
                    l&rsquo;écriture sont interdites.</li>
                <li>Le respect hiérarchique est un minimum, nous sommes bénévoles et tous
                    bienveillants mais le fondateur, le gérant et les responsables sont vos supérieurs
                    m&ecirc;me si ceux-ci sont aussi votre famille Habbui.</li>
                <li>En cas de problème, si vous ne savez pas comment gérer, agissez au mieux et venez en
                    informer votre responsable.</li>
                <li>L&rsquo;équipe d&rsquo;Habbui est toujours avec vous sauf grosse erreur. Votre comportement
                    est noté chaque semaine.</li>
            </ol>
            <p>&nbsp;</p>
            <h2><strong>Les commandes &agrave; savoir :&nbsp;&nbsp;</strong></h2>
            <table class="table table-bordered table-checkable dataTable no-footer dtr-inline">
                <tbody>
                    <tr>
                        <td width="339">
                            <p><strong>Actions &agrave; réaliser</strong>&nbsp;</p>
                        </td>
                        <td width="301">
                            <p><strong>Commande correspondante</strong>&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="339">
                            <p><strong>Convoquer un jouer</strong>&nbsp;</p>
                        </td>
                        <td width="301">
                            <p>:summon {utilisateur}&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="339">
                            <p><strong>Envoyer une alerte &agrave; un joueur</strong>&nbsp;</p>
                        </td>
                        <td width="301">
                            <p>:alert {utilisateur} {message}&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="339">
                            <p><strong>Mute un joueur</strong>&nbsp;</p>
                        </td>
                        <td width="301">
                            <p>:mute {utilisateur} {temps} {message}&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="339">
                            <p><strong>Bannir un joueur&nbsp;</strong>&nbsp;</p>
                        </td>
                        <td width="301">
                            <p>:ban {utilisateur} {message}&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="339">
                            <p><strong>Bannir IP un joueur</strong>&nbsp;</p>
                        </td>
                        <td width="301">
                            <p>:ipban {utilisateur} {message}&nbsp;</p>
                        </td>
                    </tr>
                    <tr>
                        <td width="339">
                            <p><strong>Bannir l&rsquo;ordinateur d&rsquo;un joueur</strong>&nbsp;</p>
                        </td>
                        <td width="301">
                            <p>:mcban {utilisateur} {message}&nbsp;</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END CONTENT HERE -->

    <?php include('inc/_footer.php') ?>
    </body>

</html>