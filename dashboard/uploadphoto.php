<?php
// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 10 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("../background/" . $_FILES["photo"]["name"])){
                echo $_FILES["photo"]["name"] . " existe déjà.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../background/" . time()."-".$_FILES["photo"]["name"]);
                echo "Votre fichier a été téléchargé avec succès. <br/> Le lien est donc : <input id=\"txtctc\" type=\"text\" readonly value=\"https://habbui.online/background/".time()."-".$_FILES["photo"]["name"]."\">" ;
                echo '<input type="button" id="copyToClipboard" value="Copier">';
                echo '<br>Aperçu:<br /><br /><img src="https://habbui.online/background/'.time()."-".$_FILES["photo"]["name"].'">';
            } 
        } else{
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    
$( '#copyToClipboard' ).click( function()
 {
     var clipboardText = "";
     clipboardText = $( '#txtctc' ).val(); 
     copyToClipboard( clipboardText );
     alert( "Le lien a bien été copié" );
 });

function copyToClipboard(text) {

   var textArea = document.createElement( "textarea" );
   textArea.value = text;
   document.body.appendChild( textArea );       
   textArea.select();

   try {
      var successful = document.execCommand( 'copy' );
      var msg = successful ? 'successful' : 'unsuccessful';
      console.log('Copying text command was ' + msg);
   } catch (err) {
      console.log('Oops, unable to copy',err);
   }    
   document.body.removeChild( textArea );
}
</script>