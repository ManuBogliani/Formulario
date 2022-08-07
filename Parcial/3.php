<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style/styles.css">
<?php 
session_start();

$sistema= $_POST['sistema'];
$_SESSION['SISTEMA']=$sistema;
?>

<div class="contenedor-final">
    <h1> Usted se ha suscripto a las ofertas de videojuegos de manera exitosa</h1>
    <h2><span>GAMER: </span> <?php echo $_SESSION['NOMBRE']." ". $_SESSION['APELLIDO']?></h2>
    <h2><span>Juego Favorito:</span> <?php echo$_SESSION['JUEGO']?></h2>
    <h2><span>Le gusta jugar en: </span>  <?php echo $_SESSION['CONSOLA']." , mas especialmente en la consola :".$sistema;?></h2>
 </div>
<!-- 
echo $_SESSION['NOMBRE'].$_SESSION['APELLIDO'];
echo "<br/>";
echo "Número de socio:".$_SESSION['CONTRASEÑA'];
echo "<br/>";
echo "Usted será atendido en: ". $_SESSION['ESPECIALIDAD']."  ,por el especialista :".$medico;
?>
 -->
