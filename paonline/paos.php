<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pãos - PaOnline</title>
    <script src="https://polyfill.io/pollyfill.min.js?feature=default"></script>
    <style>
        fieldset {background-color: grey;}
    </style>
</head>
<body style="background-image: url('paorico.png')">

 <fieldset>
 	<a href="welcome.php">Voltar ao inicio.</a>
 	<a href="redondo.php">Paos redondos.</a>
 	<a href="barra.php">Paos de barra.</a>
    <a href="bico.php">Pados de bicos.</a>
    <a href="padeiras.php">Ver Padeiras</a>
    <a href="bolos.php">Ver Bolos</a>
 </fieldset>	

 <fieldset style="margin-top: 20px">
 	<div>
     <h2 id="pao1" style="color: orange">PÃO DESTACADO: </h2><h2>Redondo.</h2>
     <img src="e110.5.jpg" style="float: right"> </img>
         <p style="color: orange">O classico pao redondo, tem um tamanho e formação ergonomico, sendo assim possivel ter um aggare forte mentras que o usuario consume o pão.</p>
         <strong>DISPONIVEL EM:</strong>
         <ul>
            <li><a href="estarrejapadeiras.php"> Lidl - Estarreja.</a></li>
            <li><a href="murtosapadeiras.php"> Sereira do Pão - Murtosa </a></li>
         </ul>
 	</div>
 </fieldset>

    <fieldset style="margin-top: 20px">
    <div>
      <h2 id="pao2">Barra.</h2>
     <img src="barra.jpg" style="float: right"> </img>
         <p style="color: orange">Estilo clasico de barra de pao. Podese tamben ser usada como uma espada se fica sem comer por 4 dias.</p>
         <strong>DISPONIVEL EM:</strong>
         <ul>
            <li><a href="estarrejapadeiras.php"> Lidl - Estarreja.</a></li>
            <li><a href="ovarpadeiras.php"> Continente Ovar - Ovar.</a></li>
         </ul> 
    </div>
    </fieldset>

<fieldset style="margin-top: 20px">
    <div>
      <h2 id="pao3">Broa.</h2>
     <img src="broa.jpg" style="float: right"> </img>
         <p style="color: orange">Normalment feita com milho, e usual combinada com vinho tinto para fazer "sopinhas de vinho".</p>
         <strong>DISPONIVEL EM:</strong>
         <ul>
            <li><a href="murtosapadeiras.php"> Sereira do Pão - Murtosa</a></li>
            <li><a href="estarrejapadeiras.php"> Lidl - Estarreja.</a></li>
            <li><a href="ovarpadeiras.php"> Continente Ovar - Ovar.</a></li>
         </ul> 
    </div>
    </fieldset>

<fieldset style="margin-top: 20px">
    <div>
      <h2 id="pao4">Bicos.</h2>
     <img src="BICO.png" style="float: right"> </img>
         <p style="color: orange">São comos os paos redondos, mas em miniatura. O seu tamanha compactos os fazem capaces de ser transportados em bolsos geralmente medianos.</p>
         <strong>DISPONIVEL EM:</strong>
         <ul>
            <li><a href="murtosapadeiras.php"> Sereira do Pão - Murtosa</a></li>
         </ul> 
    </div>
    </fieldset>


</body>
</html>