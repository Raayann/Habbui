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

<body translate="no" >
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



  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://www.mattboldt.com/demos/typed-js/js/typed.custom.js'></script>
<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
      <script id="rendered-js" >
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 155,
      "density": {
        "enable": true,
        "value_area": 789.1476416322727 } },


    "color": {
      "value": "#ffffff" },

    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000" },

      "polygon": {
        "nb_sides": 5 },

      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100 } },


    "opacity": {
      "value": 0.48927153781200905,
      "random": false,
      "anim": {
        "enable": true,
        "speed": 1,
        "opacity_min": 0,
        "sync": false } },


    "size": {
      "value": 2,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 2,
        "size_min": 0,
        "sync": false } },


    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1 },

    "move": {
      "enable": true,
      "speed": 0.2,
      "direction": "none",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200 } } },



  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "bubble" },

      "onclick": {
        "enable": true,
        "mode": "push" },

      "resize": true },

    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1 } },


      "bubble": {
        "distance": 83.91608391608392,
        "size": 1,
        "duration": 3,
        "opacity": 1,
        "speed": 3 },

      "repulse": {
        "distance": 200,
        "duration": 0.4 },

      "push": {
        "particles_nb": 4 },

      "remove": {
        "particles_nb": 2 } } },



  "retina_detect": true });


$(function () {
  var data = [
  {
    action: 'type',
    strings: ["Accessing restricted files.."],
    output: 'grabbing files..<br><br>',
    postDelay: 1000 },

  {
    action: 'type',
    strings: ["Error: You are banned"],
    output: '<br><br>',
    postDelay: 1000 },

  {
    action: 'type',
    strings: ["These are not the error codes you're looking for.", 'Please either report this error to an administrator or return back and forget you were here...'],
    postDelay: 2000 }];



  runScripts(data, 0);
});

function runScripts(t,e){var r=$(".prompt"),i=t[e];switch(!0===i.clear&&$(".history").html(""),i.action){case"type":r.removeData(),$(".typed-cursor").text(""),r.typed({strings:i.strings,typeSpeed:30,callback:function(){var o=$(".history").html();(o=o?[o]:[]).push("$ "+r.text()),i.output&&(o.push(i.output),r.html(""),$(".history").html(o.join("<br>"))),$("section.terminal").scrollTop($("section.terminal").height()),++e<t.length&&setTimeout(function(){runScripts(t,e)},i.postDelay||1e3)}})}}

    </script>

  

</body>

</html>