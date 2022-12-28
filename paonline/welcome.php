<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PaOnline</title>
    <style>
        fieldset {background-color: grey;}
        div.le {text-align: left;} 
        div.ri {text-align: right;}
    </style>
</head>
<body style="background-image: url('paorico.png')">
    <div.le><fieldset><h3>Actualmente na conta de: <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h3></fieldset></div.le>
    <div.ri><fieldset><p>
        <a href="reset-password.php" >Resetear a senha.</a>
        <a href="logout.php" >Sair da conta.</a>
        <a href="novapadeira.php" >Registrar uma novar padeira.</a>
    </p></fieldset></div.ri>

    <div>
        
     <fieldset style="margin-top: 5px">
        <h2>Mensagem do administrador.</h2>
        <p style="color: cyan">Bem-vido a Paderia Online! O meo nome e Ángel e sou o administrador oficial do site. Por ahora so temos presença sobre Murtosa, Estarreja e Ovar. O site agora esta a ser deselvolvido, esto pode tardar ums dias, tenha pacenza.</p>
     </fieldset> 
        
        <fieldset style="margin-top: 5px">
         <h1 style="color: orange">Pao Destacado!</h1>
         <img src="e110.5.jpg" style="float: right"> </img>
         <p style="color: orange">O classico pao redondo, tem um tamanho e formação ergonomico, sendo assim possivel ter um aggare forte mentras que o usuario consume o pão.</p>
         <strong>DISPONIVEL EM:</strong>
         <ul>
            <li><a href="estarrejapadeiras.php"> Lidl - Estarreja.</a></li>
            <li><a href="murtosapadeiras.php"> Sereira do Pão - Murtosa </a></li>
         </ul>
        </fieldset>    
        <fieldset style="margin-left: 810px">
         <h1>Paderias por separado:</h1>
         <a href="padeiras.php">Ver sozinho as paderias.</a>
         <ul>
            <li><a href="estarrejapadeiras.php">Em Estarreja</a></li>
            <li><a href="ovarpadeiras.php">Em Ovar</a></li>
            <li><a href="murtosapadeiras.php">Em Murtosa</a></li>
         </ul>
        </fieldset>
        <fieldset style="margin-right: 810px">
         <h1>Paos:</h1>
         <a href="paos.php">Ver sozinho os pãos.</a>
         <ul>
            <li><a href="/paonline/html-links.html#pao-1">Redondos</a></li>
            <li><a href="#pao2">Barra</a></li>
            <li><a href="#pao3">Broa</a></li>
            <li><a href="#pao4">Bicos</a></li>
         </ul>
        </fieldset>
        <fieldset style="margin-right: 810px">
         <h1>Bolos:</h1>
         <a href="bolos.php">Ver sozinho os bolos.</a>
         <ul>
            <li><a href="">Tarta de Maçã</a></li>
            <li><a href="">Pastel de Nata</a></li>
            <li><a href="">Croissant</a></li>
            <li><a href="">Napolitanas</a></li>
            <li><a href="">Bolo de Berlim</a></li>
         </ul>
        </fieldset>

    </div>
</body>
</html>