<!DOCTYPE html>
<html lang="pt-br">
<?php
?>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="description" content="TCC">
   <meta name="keywords" content="Hystoria, Card Game, Unity">
   <meta name="author" content="Allan Rodrigo, Gabriel Bonifácio, Gustavo Teixeira, João Manuel e Pedro Jorge">
   <title>Os Romanos</title>
   <link rel="shortcut icon" href="../Icone.ico" sizes="64x64">
   <link rel="stylesheet" type="text/css" href="Romanos_Estilos.css">
   <script type="text/javascript" src="../jquery-3.4.1.min.js"></script>
 </head>

 <body>
   <div class="container">
   <div class="column active">
   <div class="content">
   <h1>1</h1>
   <div class="box">
   <a href="https://pt.wikipedia.org/wiki/A%C3%A9cio_(general)"><h2>Flavio Aecio</h2></a>
   <a href="https://pt.wikipedia.org/wiki/A%C3%A9cio_(general)"><p>Saiba mais sobre Flavio Aecio, o Ultimo Romano!</p></a>
   </div>
   </div>
   <div class="bg bg1"></div>
   </div>
   <div class="column">
   <div class="content">
   <h1>2</h1>
   <div class="box">
   <a href="https://pt.wikipedia.org/wiki/Legado"><h2>Legatus</h2></a>
   <p><a href="https://pt.wikipedia.org/wiki/Legado">Saiba mais sobre os Legatus, os Oficiais romanos!</a></p>
   </div>
   </div>
   <div class="bg bg2"></div>
   </div>
   <div class="column">
   <div class="content">
   <h1>3</h1>
   <div class="box">
   <a href="https://pt.wikipedia.org/wiki/Guarda_pretoriana"><h2>Pretoriano</h2></a>
   <p><a href="https://pt.wikipedia.org/wiki/Guarda_pretoriana">Saiba mais sobre os Pretorianos, a Guarda Real do Imperador!</a></p>
   </div>
   </div>
   <div class="bg bg3"></div>
   </div>
   <div class="column">
   <div class="content">
   <h1>15</h1>
   <div class="box">
   <a href="https://pt.wikipedia.org/wiki/Centuri%C3%A3o"><h2>Centuriao</h2></a>
   <p><a href="https://pt.wikipedia.org/wiki/Centuri%C3%A3o">Saiba mais sobre os famosos Centurioes Romanos!</a></p>
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