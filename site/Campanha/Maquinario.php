<!DOCTYPE html>
<html lang="pt-br">
<?php
?>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="description" content="TCC">
   <meta name="keywords" content="Hystoria, Card Game, Unity">
   <meta name="author" content="Allan Rodrigo, Gabriel Bonifácio, Gustavo Teixeira, João Manuel e Pedro Jorge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Maquinário</title>
   <link rel="shortcut icon" href="../Icone.ico" sizes="64x64">
   <link rel="stylesheet" type="text/css" href="Maquinario_Estilos.css">
   <script type="text/javascript" src="../jquery-3.4.1.min.js"></script>
 </head>

 <body>
   <div class="container">
   <div class="column active">
   <div class="content">
   <h1>1</h1>
   <div class="box">
   <a href="https://pt.wikipedia.org/wiki/Catapulta"><h2>Catapulta</h2></a>
   <a href="https://pt.wikipedia.org/wiki/Catapulta"><p>Saiba mais sobre as catapultas!</p></a>
   </div>
   </div>
   <div class="bg bg1"></div>
   </div>
   <div class="column">
   <div class="content">
   <h1>2</h1>
   <div class="box">
   <a href="https://pt.wikipedia.org/wiki/Balista"><h2>Balista</h2></a>
   <p><a href="https://pt.wikipedia.org/wiki/Balista">Saiba mais sobre as Balistas!</a></p>
   </div>
   </div>
   <div class="bg bg2"></div>
   </div>
   <div class="column">
   <div class="content">
   <h1>3</h1>
   <div class="box">
   <a href="https://pt.wikipedia.org/wiki/Onagro_(arma)"><h2>Onagro</h2></a>
   <p><a href="https://pt.wikipedia.org/wiki/Onagro_(arma)">Saiba mais sobre as onagros!</a></p>
   </div>
   </div>
   <div class="bg bg3"></div>
   </div>
   <div class="column">
   <div class="content">
   <h1>15</h1>
   <div class="box">
   <a href="https://es.wikipedia.org/wiki/Escorpi%C3%B3n_(arma)"><h2>Scorpio</h2></a>
   <p><a href="https://es.wikipedia.org/wiki/Escorpi%C3%B3n_(arma)">Saiba mais sobre o Scorpio romano!</a></p>
   </div>
   </div>
   <div class="bg bg4">
    <a href="#"></a>
   </div>
   </div>
   </div>
   <script type="text/javascript">
    $(document).on('mouseover', '.container .column', function(){
      $(this).addClass('active').siblings().removeClass('active')
    })
   </script>
 </body>

</html>