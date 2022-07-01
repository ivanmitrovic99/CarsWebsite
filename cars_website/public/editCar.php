<?php 

require_once "../cars/DAOCars.php";
$dao = new DAOCars();
$car=$dao->selectCar($id);
$car=isset($car)?$car:null;
if($car!=null){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automobili Živanović</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/v-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    
     
<header class="header">
    
<a href="../cars/?action=homepage"><img class="logo" src="../images/logo.gif"></a>
    <div id="menu-btn" class="fas fa-bars fa-lg"></div>
   <nav class="navbar">
       <a href="../cars/?action=homepage">Početna</a>
       <a href="../cars/?action=vehicles">Automobili</a>
       <a href="../cars/?action=aboutus">O nama</a>
        <a href="../cars/?action=contact">Kontakt</a>
   
   </nav>
   </header>
<br><br><br><br><br><br><br>

<br><br>
<h1>Ažuriraj automobil</h1><br>
<form action="../cars/?action=Update Car" method="post">
Id:<input type="number" name="id" value="<?php echo $car["id"]; ?>"></input>
<br>Ime:<input type="text" name="name" value="<?php echo $car["name"]; ?>"></input>
<br>Marka:<input type="text" name="manufacturer" value="<?php echo $car["manufacturer"]; ?>"></input>
<br>Cena:<input type="number" name="price" value="<?php echo $car["price"]; ?>"></input>
<br>Godiste:<input type="number" name="age" value="<?php echo $car["age"]; ?>"></input>
<br>Kilometraza:<input type="number" name="mileage" value="<?php echo $car["mileage"]; ?>"></input>
<br>Br. vrata:<input type="number" name="doors_num" value="<?php echo $car["doors_num"]; ?>"></input>
<br>Br. sed.:<input type="number" name="seats_num" value="<?php echo $car["seats_num"]; ?>"></input>
<br>Motor:<input type="text" name="motor" value="<?php echo $car["motor"]; ?>"></input>
<br>Kubikaza:<input type="number" name="tank" value="<?php echo $car["tank"]; ?>"></input>
<br>Karoserija:<input type="text" name="body" value="<?php echo $car["body"]; ?>"></input>
<br>Snaga:<input type="number" name="power" value="<?php echo $car["power"]; ?>"></input>
<br>Boja:<input type="text" name="color" value="<?php echo $car["color"]; ?>"></input>
<br>Stanje:<input type="text" name="state" value="<?php echo $car["state"]; ?>"></input>
<br>Glavna slika:<input type="text" name="picture" value="<?php echo $car["picture"]; ?>"></input>
<br>ID Slika:<input type="number" name="pictures_id" value="<?php echo $car["pictures_id"]; ?>"></input>
<br><input type="submit" name="action" value="Update Car"></input>
</form>


<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>

<footer class="footer" style="position:fixed; bottom:0px;">
<div class="footer-row">
    <div class="footer-col col1">
    <img class="logo" src="../images/logo.gif">
</div>
<div class="footer-col col2">
    <a href="https://facebook.com/"><i class="fa-brands fa-facebook fa-2x"></i></a>
    <a href="https://instagram.com"><i class="fa-brands fa-instagram fa-2x"></i></a>
</div>
</div>
</footer>
<?php } ?>



<script src="../js/script.js"></script>




</body>
</html>