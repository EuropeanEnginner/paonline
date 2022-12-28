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
    <title>Paderias em Murtosa - PaOnline</title>
    <script src="https://polyfill.io/pollyfill.min.js?feature=default"></script>
    <style>
        fieldset {background-color: grey;}
    </style>
</head>
<body style="background-image: url('paorico.png')">

 <fieldset>
 	<a href="welcome.php">Voltar ao inicio.</a>
 	<a href="ovarpadeiras.php">Paderias em Ovar.</a>
 	<a href="estarrejapadeiras.php">Paderias em Estarreja.</a>
    <a href="padeiras.php">Ver todas as padeiras.</a> 
    <a href="paos.php">Ver Pãos</a>
    <a href="bolos.php">Ver Bolos</a>
 </fieldset>	

 <fieldset style="margin-top: 20px">
 	<div>
     <h2 id="murtosa">Sereia do Pão. </h2>
     <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d654.1451842741379!2d-8.63999547781672!3d40.738405286796656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd239031451cb59f%3A0xd5957cbdf0e16967!2sSereia%20do%20P%C3%A3o!5e0!3m2!1spt-PT!2spt!4v1669206592797!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
     <p>Uma padeira dirigida pelo Venezolanos, podese falar espanhol aqui.</p>
     <strong>Paos Disponiveis</strong>
     <ul>
     	<li>Redondo </li>
     	<li>Broa </li>
        <li>Bicos </li>
     </ul>
     <strong>Bolos Disponiveis</strong>
     <ul>
      <li>Tarta de Maça </li>
      <li>Pastel de nata </li>
      <li>Croissant </li>
      <li>Bolo de Berlim </li>
     </ul> 	
 	</div>
 	<div>

 	</div>
 </fieldset>

</body>
</html>