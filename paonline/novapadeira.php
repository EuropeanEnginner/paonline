<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Nova Padeira - PaOnline</title>
    <meta charset="UTF-8">
    <style>
        fieldset {background-color: grey;}
        div.le {text-align: left;} 
        div.ri {text-align: right;}
    </style>
</head>
<body style="background-image: url('paorico.png')">

<fieldset>
  <a href="welcome.php">Voltar ao inicio.</a>
  <a href="murtosapadeiras.php">Paderias em Murtosa.</a>
  <a href="estarrejapadeiras.php">Paderias em Estarreja.</a>
  <a href="ovarpadeiras.php">Paderias em Ovar.</a>
  <a href="padeiras.php">Ver todas as padeiras.</a> 
  <a href="paos.php">Ver Pãos</a>
  <a href="bolos.php">Ver Bolos</a>
 </fieldset>

 <fieldset>
     <h2 style="color: orange">Registro de nova padeira: </h2>
     <i>Como funciona?</i>
     <p>Para registrar uma nova padeira, primeiro e preciso de que mandes os detalhes precisos da padeira a nosso equipo de administradores (por agora, so eu) para que nos podamos comprobar se a padeira pode ser adicionada a nossa web. Tenha em conta que nos nao somos maquinas automatizadas e que pode que a padeira que quere adicionar demore umas horas a ums dias.</p>
 </fieldset>

 <fieldset>
    <h3 style="color: orange">Como conseguir um link do Google Maps?</h3>
    <p>Primeiro, nos vamos ao Maps, e pesquisamos a padeira que nos queremos. Para este exemplo, eu vou a utilizar um restaurante mexicano em As Vegas, Nevada.</p>
    <img src="tortas.png"></img>
    <div>
    <p>Logo, nos damos a "Partilhar", "Incorporar um mapa", e saldra isto:</p>
    <img src="mapa.png"></div>
    </div>
    <div>
    <p>NAO copies tudo o link, so e preciso a primera parte que empeza desde a primeira parentesis ate a segunda.</p>  
    <img src="primeira.png"></img>
    <img src="ultima.png"></img>
    </div>
 </fieldset>

 <fieldset>
 	<form action="config_novapadeira.php" method='POST'>
            <div class="form-group">
                <center><label for="nome">Nome da padeira</label></center>
                <center><input type="text" id="nome" name="nome"></center>
            </div>    
            <div class="form-group">
                <center><label>Localidade</label></center>
                <center><input type="radio" name="localidade" value="Murtosa">Murtosa</center>
                <center><input type="radio" name="localidade" value="Estarreja">Estarreja</center>
                <center><input type="radio" name="localidade" value="Ovar">Ovar</center>
            </div>
            <div class="form-group">
                <center><label for="padeiramap">Link no Google Maps:</label></center>
                <center><input type="text" name="padeiramap" id="padeiramap"></center>
            </div>  
            <center><div class="form-group">
                <button>Enviar</button>
            </div></center>
        </form>
 </fieldset>
</form>

</body>
</html>