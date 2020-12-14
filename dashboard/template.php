
<?php require '../inc/config.php';

if (!isset($_SESSION['name'])) {
    Redirect("/");
    exit();
}
if ($rank < 7) {
    Redirect("/");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Habbui | Dashboard</title>
    <?php include('inc/_header.php') ?>

    <!--CONTENT HERE -->

    <!-- END CONTENT HERE -->

    <?php include('inc/_footer.php') ?>
    </body>

</html>