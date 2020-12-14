<?php
require 'inc/config.php';

/* if (!isset($username)){Redirect("/");} */

if (!isset($username)){$username = "Invité(e)";}

$page = "Actualité";
$category = "Communauté";
$urlcategory = "/moi";
$subcategory = "Les nouveautés";



?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Habbui: Les nouveautés</title>
		<?php include("inc/_headerprincipal.php"); ?>

		<!--CONTENT HERE -->


        <div class="container">
<div class="card card-custom">
 <div class="card-header">
  <h3 class="card-title">
  Les nouveautés
  </h3>
  <div class="card-toolbar">
   <div class="example-tools justify-content-center">
    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
   </div>
  </div>
 </div>
 <!--begin::Form-->
 <form>
 <div class="card-body">
   <div class="form-group mb-8">
    
	<div class="alert alert-custom alert-primary fade show mb-5" role="alert">
	    <div class="alert-icon"><i class="flaticon-warning"></i></div>
	    <div class="alert-text">Tiens-toi au courant de l'actualité d'Habbui en venant sur cette page!</div>
	    <div class="alert-close">
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true"><i class="ki ki-close"></i></span>
     </div>
    </div>
   </div>



          </div>
         </form>

        <?php $news = $bdd->query('SELECT * FROM cms_news ORDER BY id DESC LIMIT 0, 5');
	while($data = $news->fetch()) { ?>


<div class="card card-custom gutter-b bg-diagonal bg-diagonal-light-primary">
 <div class="card-body">
  <div class="d-flex align-items-center justify-content-between p-4 flex-lg-wrap flex-xl-nowrap">
   <div class="d-flex flex-column mr-5">
    <a href="#" class="h4 text-dark text-hover-primary mb-5">
    <?php echo $data['title']; ?>
    </a>
    <p class="text-dark-50">
    <?php echo $data['description']; ?>
    </p>
   </div>
   <div class="ml-6 ml-lg-0 ml-xxl-6 flex-shrink-0">

    <a href="article.php?id=<?php echo $data['id']; ?>" class="btn font-weight-bolder text-uppercase btn-primary py-4 px-6">
     Voir plus
    </a>
   </div>
  </div>
 </div>
</div>
<?php } ?>
</div>

  </div>
 </form>
 <!--end::Form-->
</div>
</div>
        <!-- END CONTENT HERE -->

                <?php include("inc/_footerprincipal.php");?>
                </body>
        </html>