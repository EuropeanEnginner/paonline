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
    <title>Paderias em Ovar - PaOnline</title>
    <script src="https://polyfill.io/pollyfill.min.js?feature=default"></script>
    <style>
        fieldset {background-color: grey;}
    </style>
</head>
<body style="background-image: url('paorico.png')">

 <fieldset>
 	<a href="welcome.php">Voltar ao inicio.</a>
 	<a href="murtosa.php">Paderias em Murtosa.</a>
 	<a href="estarreja.php">Paderias em Estarreja.</a>
    <a href="paos.php">Ver Pãos</a>
    <a href="bolos.php">Ver Bolos</a>
 </fieldset>	

 <fieldset style="margin-top: 20px">
 	<div>
     <h2 id="ovar">Continente Ovar. </h2>
     <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1508.424480619824!2d-8.633888314207262!3d40.87518871886447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2385df238fbd93%3A0xd16ea5a69b510f0b!2sContinente%20Ovar!5e0!3m2!1spt-PT!2spt!4v1669207061563!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
     <p>No centro comercial Dolce Vita Ovar: Ao entrar, gire a izquierda.</p>
     <strong>Paos Disponiveis</strong>
     <ul>
     	<li>Barra </li>
     	<li>Broa </li>
     </ul>
     <strong>Bolos Disponiveis</strong>
     <ul>
      <li>Pastel de nata </li>
      <li>Croissant </li>
      <li>Napolitanas </li>
      <li>Tarta de Maça </li>
     </ul> 	
 	</div>
 	<div>

 	</div>
 </fieldset>

</body>
</html>