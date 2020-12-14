<?php 
$access = "ban";
require '../inc/config.php';

  if(!isset($expire) || !isset($reason)){
    Redirect("/");
  }

?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <title>Habbui: Banned</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>
  window.console = window.console || function(t) {};

</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no">
  <div id="particles-js"></div>
<div class="terminal-window">
  <header>
    <div class="button green"></div>
    <div class="button yellow"></div>
    <div class="button red"></div>
  </header>
  <section class="terminal">
    <div class="history"></div>
    $&nbsp;<span class="prompt"></span>
    <span class="typed-cursor"></span>
    
  </section>
</div>



  <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript" src='https://www.mattboldt.com/demos/typed-js/js/typed.custom.js'></script>
<script type="text/javascript" src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript">

    $(function() {
      var data = [
        {
          action: 'type',
          strings: ["Accès restreint.."],
          output: 'tentative de reconnexion..<br><br>',
          postDelay: 300
        },
      { 
        action: 'type',
        strings: ["Erreur: Vous avez été banni(e) par <?php echo $added_by; ?>"],
        output: '<span class="gray"><?php echo $added_date ?>..<br>&nbsp;',
        postDelay: 500
      },
      { 
        action: 'type',
        strings: ["Raison: <?php echo $reason;?>"],
        output: '&nbsp;',
        postDelay: 1200
      },
      { 
        action: 'type',
        strings: ["Vous serez débanni(e) <?php echo $expire;?>"],
        output: '<br>&nbsp;',
        postDelay: 1200
      },
      { 
        action: 'type',
        strings: ["Vous ne comprenez pas la raison de votre banissement ?"],
        output: '<a class="gray" href="<?php echo $lien; ?>/contact">Cliquez ici..</a><br>&nbsp;',
        postDelay: 1200
      }
    ];
      runScripts(data, 0);
    });
    </script>

  

</body>

</html>