<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style/styles.css">
<?php
session_start();


$consola= $_POST['consola'];
$_SESSION['CONSOLA']=$consola;

switch ($consola){
    case ("Playstation"):
     echo '<form action= "3.php" method="post" class="form">
     <label  class="label-select"> Seleccione su PS Favorita:</label>
     <select name= "sistema" class="select">
     <option>Playstation 1</option>
     <option>Playstation 2</option>
     <option>Playstation 3</option>
     <option>Playstation 4</option>
     <option>Playstation 5</option>
     <option>Playstation Portatil</option>
     </select>
     <input type="submit" class="btn-submit">';
     break;
    case("XBOX"):
        echo '<form action= "3.php" method="post" class="form">
        <label class="label-select"> Seleccione su XBOX Favorita:</label>
        <select name= "sistema" class="select">
        <option>XBOX</option>
        <option>XBOX 360</option>
        <option>XBOX One</option>
        <option>XBOX Series X/S </option>
        </select>
        <input type="submit" class="btn-submit">';
        break; 
    case("PC"):
        echo '<form action= "3.php" method="post" class="form">
        <label class="label-select"> Seleccione su PC Favorita:</label>
        <select name= "sistema" class="select">
        <option>Intel I7 11800H, RTX 3060, 16GB RAM</option>
        <option>Ryzen 9 4900HS, RTX 2060, 16GB RAM</option>
        <option>Intel I5 11400H, RTX 3050ti, 16GB RAM</option>
        <option>Intel I5 11350H, RTX 3070, 16GB RAM</option>
        </select><br><br><br>
        <input type="submit" class="btn-submit">';
        break; 
    case("Nintendo"):
        echo '<form action= "3.php" method="post" class="form">
        <label class="label-select"> Seleccione su Nintendo Favorita:</label>
        <select name= "sistema" class="select">
        <option>Nintendo 64</option>
        <option>Nintendo DS / 3DS</option>
        <option>Nintendo Wii</option>
        <option>Nintendo Switch</option>
        </select>
        <input type="submit" class="btn-submit" >';
        break; 
    case("Mobile"):
        echo '<form action= "3.php" method="post" class="form">
        <label class="label-select"> Seleccione su Mobile Favorito:</label>
        <select name= "sistema" class="select">
        <option>ASUS ROG Phone 5</option>
        <option>Nubia Red Magic 6</option>
        <option>iPhone 12 Pro</option>
        <option>Samsung Galaxy S21 Ultra</option>
        </select>
        <input type="submit" class="btn-submit">';
        break;       

 }     
?>
